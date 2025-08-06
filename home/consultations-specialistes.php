<?php include_once 'header.php'; ?>
<div class="app-body ">
    <div class="row g-3">
        <div class="col-12">
            <div class="card ">
                <div class="card-header d-flex justify-content-between align-items-center bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary ">
                        <i class="ri-hospital-line"></i>
                        Consultations spécialistes
                    </h5>
                    <a href="" class="btn btn-primary ms-auto">
                        <i class="ri-add-line">Ajouter</i>
                    </a>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-3 col-xl-3 ">
                            <div class="border-start p-3 rounded-3 border-3 border-primary">
                                <h6 class="text-muted">Lorem.</h6>
                                <h3 class="mb-0">100</h3>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-3 col-xl-3">
                            <div class="border-start p-3 rounded-3 border-3 border-success">
                                <h6 class="text-muted">Lorem.</h6>
                                <h3 class="mb-0">100</h3>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-3 col-xl-3 ">
                            <div class="border-start p-3 rounded-3 border-3 border-warning">
                                <h6 class="text-muted">Lorem.</h6>
                                <h3 class="mb-0">100</h3>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-3 col-xl-3 ">
                            <div class="border-start p-3 rounded-3 border-3 border-info">
                                <h6 class="text-muted">Lorem.</h6>
                                <h3 class="mb-0">100</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- filtrage des consultations spécialistes -->
        <div class="col-12">
            <div class="card">
                <div class="card-body py-3">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Rechercher une consultation ...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="" id="" class="form-select">
                                <option value="">Tous les services</option>
                                <option value="">service 1</option>
                                <option value="">service 2</option>
                                <option value="">service 3</option>
                                <option value="">service 4</option>
                                <option value="">service 5</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="" id="" class="form-select">
                                <option value="">Tous les spécialistes</option>
                                <option value="">spécialiste 1</option>
                                <option value="">spécialiste 2</option>
                                <option value="">spécialiste 3</option>
                                <option value="">spécialiste 4</option>
                                <option value="">spécialiste 5</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Rechercher</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- liste des consultations spécialisers -->
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                            Affichage <span class="fw-semibold"> de 10 sur 100</span>
                        </div>
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a href="" class="page-link">
                                    <i class="ri-arrow-left-s-line"></i>
                                </a>
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