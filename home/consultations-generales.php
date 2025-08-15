<?php include_once 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- statistique -->
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-bettwen  bg-primary bg-opacity-10 align-items-center">
                    <h5 class="card-title text-primary">
                        <i class="ri-hospital-line"></i>
                        Consultations
                    </h5>
                  
                        <a href="" class="btn  btn-primary ms-auto">
                            <i class="ri-add-line"></i>
                            Nouvelle 
                        </a>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-3 col-md-6 col-xl-3">
                            <div class="border-start border-3 p-3 border-primary rounded-3">
                                <h6 class="text-muted">Lorem, ipsum.</h6>
                                <h3 class="mb-0">102</h3>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-6 col-xl-3">
                            <div class="border-start border-3 p-3 border-success rounded-3">
                                <h6 class="text-muted">Lorem, ipsum.</h6>
                                <h3 class="mb-0">102</h3>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-6 col-xl-3">
                            <div class="border-start border-3 p-3 border-warning rounded-3">
                                <h6 class="text-muted">Lorem, ipsum.</h6>
                                <h3 class="mb-0">102</h3>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-6 col-xl-3">
                            <div class="border-start border-3 p-3 border-info rounded-3">
                                <h6 class="text-muted">Lorem, ipsum.</h6>
                                <h3 class="mb-0">102</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recherche et triage -->
         <div class="col-12">
            <div class="card">
                <div class="card-body py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Rechercher une consultation ...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <select name="" class="form-select" id="">
                                <option value="">Tous les services</option>
                                <option value="">service 1</option>
                                <option value="">service 1</option>
                                <option value="">service 1</option>
                                <option value="">service 1</option>
                            </select>
                        </div>
                        <div class="col-md-3 ">
                        <select name="" class="form-select" id="">
                                <option value="">Tous les services</option>
                                <option value="">service 1</option>
                                <option value="">service 1</option>
                                <option value="">service 1</option>
                                <option value="">service 1</option>
                            </select>
                        </div>
                        <div class="col-md-2 ">
                            <button class="btn btn-primary w-100">
                                <i class="ri-filter-line me-1"></i>
                                Appliquer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
         </div>

         <!-- tableau generale -->
          <div class="col-12">
          <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive ">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>N° Consultation</th>
                                    <th>Patient</th>
                                    <th>Entrée</th>
                                    <th>Service</th>
                                    <th>Lit</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                            Affichage <span class="fw-semibold">1-10</span> sur <span class="fw-semibold">47</span>
                        </div>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="ri-arrow-left-s-line"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="ri-arrow-right-s-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>