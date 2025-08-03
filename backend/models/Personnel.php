<?php 
class Personnel extends Personne{
    private $matricule;
    private $dateEmbauche;
    private $dateDebut;
    private $dateFin;
    private $fonction;
    private $departement;
    private $service;
    private $type_contract;
    private $grade;
    private $date_titularisation;
    private $numero_rpps;
    private $numero_adeli;
    private $diplome_principal;
    private $universite_diplome;
    private $date_diplome;
    private $formations_complementaires;
    private $quotite_travail;
    private $temps_travail_hebdo;
    private $service_affectation_principal;
    private $droit_prescription;
    private $droit_signature_electronique;
    private $niveau_habilitation;
    private $statut;
    private $disponible_garde;
    private $disponible_astreinte;
    private $bureau;
    private $poste_interne;
    private $bip;
    private $salaire_base;
    private $coefficient;
    private $echelon;

    public function getMatricule(){
		return $this->matricule;
	}

	public function setMatricule($matricule){
		$this->matricule = $matricule;
	}

	public function getDateEmbauche(){
		return $this->dateEmbauche;
	}

	public function setDateEmbauche($dateEmbauche){
		$this->dateEmbauche = $dateEmbauche;
	}

	public function getDateDebut(){
		return $this->dateDebut;
	}

	public function setDateDebut($dateDebut){
		$this->dateDebut = $dateDebut;
	}

	public function getDateFin(){
		return $this->dateFin;
	}

	public function setDateFin($dateFin){
		$this->dateFin = $dateFin;
	}

	public function getFonction(){
		return $this->fonction;
	}

	public function setFonction($fonction){
		$this->fonction = $fonction;
	}

	public function getDepartement(){
		return $this->departement;
	}

	public function setDepartement($departement){
		$this->departement = $departement;
	}

	public function getService(){
		return $this->service;
	}

	public function setService($service){
		$this->service = $service;
	}

	public function getType_contract(){
		return $this->type_contract;
	}

	public function setType_contract($type_contract){
		$this->type_contract = $type_contract;
	}

	public function getGrade(){
		return $this->grade;
	}

	public function setGrade($grade){
		$this->grade = $grade;
	}

	public function getDate_titularisation(){
		return $this->date_titularisation;
	}

	public function setDate_titularisation($date_titularisation){
		$this->date_titularisation = $date_titularisation;
	}

	public function getNumero_rpps(){
		return $this->numero_rpps;
	}

	public function setNumero_rpps($numero_rpps){
		$this->numero_rpps = $numero_rpps;
	}

	public function getNumero_adeli(){
		return $this->numero_adeli;
	}

	public function setNumero_adeli($numero_adeli){
		$this->numero_adeli = $numero_adeli;
	}

	public function getDiplome_principal(){
		return $this->diplome_principal;
	}

	public function setDiplome_principal($diplome_principal){
		$this->diplome_principal = $diplome_principal;
	}

	public function getUniversite_diplome(){
		return $this->universite_diplome;
	}

	public function setUniversite_diplome($universite_diplome){
		$this->universite_diplome = $universite_diplome;
	}

	public function getDate_diplome(){
		return $this->date_diplome;
	}

	public function setDate_diplome($date_diplome){
		$this->date_diplome = $date_diplome;
	}

	public function getFormations_complementaires(){
		return $this->formations_complementaires;
	}

	public function setFormations_complementaires($formations_complementaires){
		$this->formations_complementaires = $formations_complementaires;
	}

	public function getQuotite_travail(){
		return $this->quotite_travail;
	}

	public function setQuotite_travail($quotite_travail){
		$this->quotite_travail = $quotite_travail;
	}

	public function getTemps_travail_hebdo(){
		return $this->temps_travail_hebdo;
	}

	public function setTemps_travail_hebdo($temps_travail_hebdo){
		$this->temps_travail_hebdo = $temps_travail_hebdo;
	}

	public function getService_affectation_principal(){
		return $this->service_affectation_principal;
	}

	public function setService_affectation_principal($service_affectation_principal){
		$this->service_affectation_principal = $service_affectation_principal;
	}

	public function getDroit_prescription(){
		return $this->droit_prescription;
	}

	public function setDroit_prescription($droit_prescription){
		$this->droit_prescription = $droit_prescription;
	}

	public function getDroit_signature_electronique(){
		return $this->droit_signature_electronique;
	}

	public function setDroit_signature_electronique($droit_signature_electronique){
		$this->droit_signature_electronique = $droit_signature_electronique;
	}

	public function getNiveau_habilitation(){
		return $this->niveau_habilitation;
	}

	public function setNiveau_habilitation($niveau_habilitation){
		$this->niveau_habilitation = $niveau_habilitation;
	}

	public function getStatut(){
		return $this->statut;
	}

	public function setStatut($statut){
		$this->statut = $statut;
	}

	public function getDisponible_garde(){
		return $this->disponible_garde;
	}

	public function setDisponible_garde($disponible_garde){
		$this->disponible_garde = $disponible_garde;
	}

	public function getDisponible_astreinte(){
		return $this->disponible_astreinte;
	}

	public function setDisponible_astreinte($disponible_astreinte){
		$this->disponible_astreinte = $disponible_astreinte;
	}

	public function getBureau(){
		return $this->bureau;
	}

	public function setBureau($bureau){
		$this->bureau = $bureau;
	}

	public function getPoste_interne(){
		return $this->poste_interne;
	}

	public function setPoste_interne($poste_interne){
		$this->poste_interne = $poste_interne;
	}

	public function getBip(){
		return $this->bip;
	}

	public function setBip($bip){
		$this->bip = $bip;
	}

	public function getSalaire_base(){
		return $this->salaire_base;
	}

	public function setSalaire_base($salaire_base){
		$this->salaire_base = $salaire_base;
	}

	public function getCoefficient(){
		return $this->coefficient;
	}

	public function setCoefficient($coefficient){
		$this->coefficient = $coefficient;
	}

	public function getEchelon(){
		return $this->echelon;
	}

	public function setEchelon($echelon){
		$this->echelon = $echelon;
	}
}