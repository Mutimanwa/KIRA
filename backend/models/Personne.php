<?php 
 class Personne {
    private $id;
    private $uuid;
    private $type_personne;
    private $civilite;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $lieu_naissance;
    private $sexe;
    private $nationalite;
    private $adresse_ligne1;
    private $adresse_ligne2;
    private $code_postal;
    private $ville;
    private $pays;
    private $region;
    private $religion;
    private $telephone_portable;
    private $telephone_profesionnel;
    private $email_principale;
    private $email_secondaire;
    private $personne_confiance_nom;
    private $personne_confiance_tel;
    private $personne_confiance_lien;
    private $personne_confiance_email;
    private $photo_url;
    private $langue_preferee ;
    private $remarques;
    private $statut_revification;
    private $date_verification;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    private $updated_by;
    private $deleted_by;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUuid(){
		return $this->uuid;
	}

	public function setUuid($uuid){
		$this->uuid = $uuid;
	}

	public function getType_personne(){
		return $this->type_personne;
	}

	public function setType_personne($type_personne){
		$this->type_personne = $type_personne;
	}

	public function getCivilite(){
		return $this->civilite;
	}

	public function setCivilite($civilite){
		$this->civilite = $civilite;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}
	public function getDate_naissance(){
		return $this->date_naissance;
	}

	public function setDate_naissance($date_naissance){
		$this->date_naissance = $date_naissance;
	}

	public function getLieu_naissance(){
		return $this->lieu_naissance;
	}

	public function setLieu_naissance($lieu_naissance){
		$this->lieu_naissance = $lieu_naissance;
	}

	public function getSexe(){
		return $this->sexe;
	}

	public function setSexe($sexe){
		$this->sexe = $sexe;
	}

	public function getNationalite(){
		return $this->nationalite;
	}

	public function setNationalite($nationalite){
		$this->nationalite = $nationalite;
	}

	public function getAdresse_ligne1(){
		return $this->adresse_ligne1;
	}

	public function setAdresse_ligne1($adresse_ligne1){
		$this->adresse_ligne1 = $adresse_ligne1;
	}

	public function getAdresse_ligne2(){
		return $this->adresse_ligne2;
	}

	public function setAdresse_ligne2($adresse_ligne2){
		$this->adresse_ligne2 = $adresse_ligne2;
	}

	public function getCode_postal(){
		return $this->code_postal;
	}

	public function setCode_postal($code_postal){
		$this->code_postal = $code_postal;
	}

	public function getVille(){
		return $this->ville;
	}

	public function setVille($ville){
		$this->ville = $ville;
	}

	public function getPays(){
		return $this->pays;
	}

	public function setPays($pays){
		$this->pays = $pays;
	}

	public function getRegion(){
		return $this->region;
	}

	public function setRegion($region){
		$this->region = $region;
	}

	public function getTelephone_portable(){
		return $this->telephone_portable;
	}

	public function setTelephone_portable($telephone_portable){
		$this->telephone_portable = $telephone_portable;
	}

	public function getTelephone_profesionnel(){
		return $this->telephone_profesionnel;
	}

	public function setTelephone_profesionnel($telephone_profesionnel){
		$this->telephone_profesionnel = $telephone_profesionnel;
	}

	public function getEmail_principale(){
		return $this->email_principale;
	}

	public function setEmail_principale($email_principale){
		$this->email_principale = $email_principale;
	}

	public function getEmail_secondaire(){
		return $this->email_secondaire;
	}

	public function setEmail_secondaire($email_secondaire){
		$this->email_secondaire = $email_secondaire;
	}

	public function getPersonne_confiance_nom(){
		return $this->personne_confiance_nom;
	}

	public function setPersonne_confiance_nom($personne_confiance_nom){
		$this->personne_confiance_nom = $personne_confiance_nom;
	}

	public function getPersonne_confiance_tel(){
		return $this->personne_confiance_tel;
	}

	public function setPersonne_confiance_tel($personne_confiance_tel){
		$this->personne_confiance_tel = $personne_confiance_tel;
	}

	public function getPersonne_confiance_lien(){
		return $this->personne_confiance_lien;
	}

	public function setPersonne_confiance_lien($personne_confiance_lien){
		$this->personne_confiance_lien = $personne_confiance_lien;
	}

	public function getPersonne_confiance_email(){
		return $this->personne_confiance_email;
	}

	public function setPersonne_confiance_email($personne_confiance_email){
		$this->personne_confiance_email = $personne_confiance_email;
	}

	public function getPhoto_url(){
		return $this->photo_url;
	}

	public function setPhoto_url($photo_url){
		$this->photo_url = $photo_url;
	}

	public function getLangue_preferee(){
		return $this->langue_preferee;
	}

	public function setLangue_preferee($langue_preferee){
		$this->langue_preferee = $langue_preferee;
	}

	public function getRemarques(){
		return $this->remarques;
	}

	public function setRemarques($remarques){
		$this->remarques = $remarques;
	}

	public function getStatut_revification(){
		return $this->statut_revification;
	}

	public function setStatut_revification($statut_revification){
		$this->statut_revification = $statut_revification;
	}

	public function getDate_verification(){
		return $this->date_verification;
	}

	public function setDate_verification($date_verification){
		$this->date_verification = $date_verification;
	}

	public function getCreated_at(){
		return $this->created_at;
	}

	public function setCreated_at($created_at){
		$this->created_at = $created_at;
	}

	public function getUpdated_at(){
		return $this->updated_at;
	}

	public function setUpdated_at($updated_at){
		$this->updated_at = $updated_at;
	}

	public function getDeleted_at(){
		return $this->deleted_at;
	}

	public function setDeleted_at($deleted_at){
		$this->deleted_at = $deleted_at;
	}

	public function getUpdated_by(){
		return $this->updated_by;
	}

	public function setUpdated_by($updated_by){
		$this->updated_by = $updated_by;
	}

	public function getDeleted_by(){
		return $this->deleted_by;
	}

	public function setDeleted_by($deleted_by){
		$this->deleted_by = $deleted_by;
	}
 }