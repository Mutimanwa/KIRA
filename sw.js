const STATIC_CACHE = "static-cache-v1";
const ASSETS_CACHE = "assets-cache-v1";
const API_CACHE = "api-cache-v1";

const STATIC_ASSETS = [
  "/KIRA/",
  "/KIRA/home/dashboard.php",
  "/KIRA/manifest.json",
  "/KIRA/assets/css/main.min.css",
  "/KIRA/assets/css/custom.css",
  // javascript
  '/KIRA/assets/js/jquery.min.js',
  '/KIRA/assets/js/bootstrap.bundle.min.js',
  '/KIRA/assets/js/moment.min.js',
  '/KIRA/assets/js/custom.js',
  "/KIRA/home/page-not-found.php"
];

// INSTALL
self.addEventListener("install", (event) => {
  event.waitUntil(
    caches.open(STATIC_CACHE).then((cache) => {
      console.log("ouverture de la cache");
      return cache.addAll(STATIC_ASSETS);
    })
  );
});

// ACTIVATE
self.addEventListener("activate", (event) => {
  event.waitUntil(
    caches.keys().then((keys) =>
      Promise.all(keys.map((key) => {
        if (![STATIC_CACHE, ASSETS_CACHE, API_CACHE].includes(key)) {
          return caches.delete(key);
        }
      }))
    )
  );
});

// FETCH
self.addEventListener("fetch", (event) => {
  const req = event.request;

  // 1. HTML pages → Network First
  if (req.headers.get("accept").includes("text/html")) {
    event.respondWith(networkFirst(req));
    return;
  }

  // 2. API calls → Stale While Revalidate
  if (req.url.includes("/api/")) {
    event.respondWith(staleWhileRevalidate(req, API_CACHE));
    return;
  }

  // 3. CSS/JS/Images → Cache First
  if (req.url.match(/\.(css|js|png|jpg|jpeg|gif|svg|woff2?)$/)) {
    event.respondWith(cacheFirst(req, ASSETS_CACHE));
    return;
  }

  // 4. Default → just fetch
  event.respondWith(fetch(req));
});

// STRATEGIES
async function cacheFirst(req, cacheName) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  return cached || fetch(req).then((res) => {
    cache.put(req, res.clone());
    return res;
  });
}

async function networkFirst(req) {
  const cache = await caches.open(STATIC_CACHE);
  try {
    const fresh = await fetch(req);
    cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    return cache.match(req) || caches.match("/KIRA/home/page-not-found.php");
  }
}

async function staleWhileRevalidate(req, cacheName) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  const networked = fetch(req).then((res) => {
    cache.put(req, res.clone());
    return res;
  });
  return cached || networked;
}
