<?php include_once 'header.php'; ?>

<div class="app-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10 ">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-primary">
                            <i class="ri-lock-unlock-fill"></i>
                            Gestion d'accès
                        </h5>
                        <button data-bs-toggle="modal" data-bs-target="#addAcces" class="btn btn-primary btn-sm"><i
                                class="ri-add-line"></i>Nouveau droit d'accès</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-account-box-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Rôles du système</span>
                                    <h3 class="mb-0">12</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-shield-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Permissions disponibles</span>
                                    <h3 class="mb-0">50</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-group-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Utilisateurs actifs</span>
                                    <h3 class="mb-0">203</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-user-star-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Droits attribués</span>
                                    <h3 class="mb-0">30</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Rôles du système
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basicExample" class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Sécurité</th>
                                    <th>Type</th>
                                    <th>Mis à jour</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#03</td>
                                    <td>Super Admin</td>
                                    <td>Administrateur système global avec accès total.</td>
                                    <td>Très élevé</td>
                                    <td>Système</td>
                                    <td>05/05/2025 07:20</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#editRole"
                                                data-bs-title="Modifier le rôle">
                                                <i class="ri-edit-box-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delRole"
                                                data-bs-title="Supprimer le rôle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
<!-- differentes permission disponible -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Permissions disponibles
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="searchPagin" class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Code permission</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Module code</th>
                                    <th>Mis à jour</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PATIENTS_READ</td>
                                    <td>Lire les dossiers patients</td>
                                    <td>Permet de consulter les informations des patients.</td>
                                    <td>PATIENTS</td>
                                    <td>05/05/2025 07:20</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#editPermission"
                                                data-bs-title="Modifier la permission">
                                                <i class="ri-edit-box-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delPermission"
                                                data-bs-title="Supprimer la permission">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- permission relier au role  -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Permissions reliées aux rôles
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="rolePermission" class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Rôle</th>
                                    <th>Permission</th>
                                    <th>Créé</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin Etablissement</td>
                                    <td>ETABLISSEMENT_MANAGE</td>
                                    <td>05/05/2025 07:20</td>
                                    <td class="text-end">
                                        <div class="d-inline-flex gap-2">
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deteRolePermission">
                                                <i class="ri-delete-bin-line "></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editRolePermission">
                                                <i class="ri-edit-line "></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="addAcces" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary bg-opacity-10">
                <h5 class="modal-title text-primary" id="addLabel">
                    Ajouter un nouveau droit
                </h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row g-3">
                        <div class="col-4">
                            <label for="droit-type" class="form-label">Type de droit</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="ri-list-settings-line"></i></span>
                                <select name="type_droit" id="droit-type" class="form-select">
                                    <option value="">Sélectionner</option>
                                    <option value="role">Rôle</option>
                                    <option value="permission">Permission</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="role-form" class="mt-4" style="display: none;">
                        <h6 class="mb-3">Informations du Rôle</h6>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="role-name" class="form-label">Nom du rôle <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="role-name" placeholder="Ex: Gérant des admissions">
                            </div>
                            <div class="col-sm-6">
                                <label for="role-desc" class="form-label">Description</label>
                                <input type="text" class="form-control" id="role-desc" placeholder="Décrivez le rôle">
                            </div>
                            <div class="col-sm-6">
                                <label for="role-security" class="form-label">Niveau de sécurité</label>
                                <select name="role-security" id="role-security" class="form-select">
                                    <option value="">Sélectionner</option>
                                    <option value="Faible">Faible</option>
                                    <option value="Modere">Modéré</option>
                                    <option value="Eleve">Élevé</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="role-system" class="form-label">Est un rôle système ?</label>
                                <select name="role-system" id="role-system" class="form-select">
                                    <option value="non">Non</option>
                                    <option value="oui">Oui</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="permission-form" class="mt-4" style="display: none;">
                        <h6 class="mb-3">Informations de la Permission</h6>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="permission-code" class="form-label">Code de la permission <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="permission-code" placeholder="Ex: PATIENTS_READ">
                            </div>
                            <div class="col-sm-6">
                                <label for="permission-name" class="form-label">Nom de la permission <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="permission-name" placeholder="Ex: Lire les dossiers patients">
                            </div>
                            <div class="col-sm-6">
                                <label for="permission-desc" class="form-label">Description</label>
                                <input type="text" class="form-control" id="permission-desc" placeholder="Décrivez l'action">
                            </div>
                            <div class="col-sm-6">
                                <label for="permission-module" class="form-label">Module <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="permission-module" placeholder="Ex: PATIENTS">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <i class="ri-save-line"></i>
                        Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deteRolePermission" tabindex="-1" aria-laballedby="removeLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="removeLabel">Suppression</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vous êtes sûr de vouloir supprimer cette liaison de droit ?
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Non
                    </button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        Oui
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modification du rolePermission -->
<div class="modal fade" id="editRolePermission" tabindex="-1" aria-laballedby="removeLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="removeLabel">Modifier</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="" class="form-label">Rôle</label>
                        <select name="" class="form-select" id="">
                            <option value="">Veuillez sélectionner ...</option>
                            <option value="admin">Admin</option>
                            <option value="medecin">Medecin</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="form-label">Permission</label>
                        <select name="" id="" class="form-select">
                            <option value="">Veuillez sélectionner ...</option>
                            <option value="ETABLISSEMENT_MANAGE">Gestion Etablissement</option>
                            <option value="USER_MANAGE">Gestion utilisateurs</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                       <i class="ri-save-line"></i> Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- suppression du rôle -->
<div class="modal fade" id="delRole" tabindex="-1" aria-laballedby="delRoleLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delRoleLabel">Supprimer le Rôle</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce rôle ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                       Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modification du rôle    -->
<div class="modal fade" id="editRole" tabindex="-1" aria-labelledby="editRoleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editRoleLabel">Modifier le Rôle</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="edit-role-name" class="form-label">Nom du rôle <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="edit-role-name" value="Super Admin">
                    </div>
                    <div class="col-sm-6">
                        <label for="edit-role-desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="edit-role-desc" value="Administrateur système global">
                    </div>
                    <div class="col-sm-6">
                        <label for="edit-role-security" class="form-label">Niveau de sécurité</label>
                        <select name="edit-role-security" id="edit-role-security" class="form-select">
                            <option value="Faible">Faible</option>
                            <option value="Modere">Modéré</option>
                            <option value="Eleve" selected>Élevé</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="edit-role-system" class="form-label">Est un rôle système ?</label>
                        <select name="edit-role-system" id="edit-role-system" class="form-select">
                            <option value="non">Non</option>
                            <option value="oui" selected>Oui</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                       <i class="ri-save-line"></i> Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- suppression de la permission -->
<div class="modal fade" id="delPermission" tabindex="-1" aria-laballedby="delPermissionLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delPermissionLabel">Supprimer la Permission</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette permission ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                       Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modification de la permission -->
<div class="modal fade" id="editPermission" tabindex="-1" aria-labelledby="editPermissionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPermissionLabel">Modifier la Permission</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="edit-permission-code" class="form-label">Code de la permission <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="edit-permission-code" value="PATIENTS_READ">
                    </div>
                    <div class="col-sm-6">
                        <label for="edit-permission-name" class="form-label">Nom de la permission <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="edit-permission-name" value="Lire les dossiers patients">
                    </div>
                    <div class="col-sm-6">
                        <label for="edit-permission-desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="edit-permission-desc" value="Permet de consulter les informations des patients">
                    </div>
                    <div class="col-sm-6">
                        <label for="edit-permission-module" class="form-label">Module <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="edit-permission-module" value="PATIENTS">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                       <i class="ri-save-line"></i> Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let type = document.getElementById("droit-type");
    const roleForm = document.getElementById("role-form");
    const permissionForm = document.getElementById("permission-form");

    type.addEventListener("change", function () {
        if (type.value == "role") {
            roleForm.style.display = "block";
            permissionForm.style.display = "none";
        }else if (type.value == "permission") {
           roleForm.style.display = "none";
            permissionForm.style.display = "block";
        }else{
            roleForm.style.display = "none";
            permissionForm.style.display = "none";
        }

    })
</script>
<?php include_once 'footer.php'; ?>