<?php
class Patient extends Personne {
    private $numero_dossier;
    private $numero_secu;
    private $nir_certifie;
    private $groupe_sanguin;
    private $rhesus;
    private $groupe_sanguin_verifie;
    private $date_verification_gs;
    private $regime_assurance;
    private $numero_assure;
    private $organisme_complementaire;
    private $numero_complementaire;
    private $ald;
    private $numero_ald;
    private $situation_familiale;
    private $profession;
    private $employeur;
    private $regime_alimentaires;
    private $date_deces;
    private $liue_deces;
    private $medecin_traitant_externe;
    private $date_derniere_visite;
    private $nombre_hospitalisations;
    private $risque_nosocomial;
    private $date_creation;

    public function getNumero_dossier(){
		return $this->numero_dossier;
	}

	public function setNumero_dossier($numero_dossier){
		$this->numero_dossier = $numero_dossier;
	}

	public function getNumero_secu(){
		return $this->numero_secu;
	}

	public function setNumero_secu($numero_secu){
		$this->numero_secu = $numero_secu;
	}

	public function getNir_certifie(){
		return $this->nir_certifie;
	}

	public function setNir_certifie($nir_certifie){
		$this->nir_certifie = $nir_certifie;
	}

	public function getGroupe_sanguin(){
		return $this->groupe_sanguin;
	}

	public function setGroupe_sanguin($groupe_sanguin){
		$this->groupe_sanguin = $groupe_sanguin;
	}

	public function getRhesus(){
		return $this->rhesus;
	}

	public function setRhesus($rhesus){
		$this->rhesus = $rhesus;
	}

	public function getGroupe_sanguin_verifie(){
		return $this->groupe_sanguin_verifie;
	}

	public function setGroupe_sanguin_verifie($groupe_sanguin_verifie){
		$this->groupe_sanguin_verifie = $groupe_sanguin_verifie;
	}

	public function getDate_verification_gs(){
		return $this->date_verification_gs;
	}

	public function setDate_verification_gs($date_verification_gs){
		$this->date_verification_gs = $date_verification_gs;
	}

	public function getRegime_assurance(){
		return $this->regime_assurance;
	}

	public function setRegime_assurance($regime_assurance){
		$this->regime_assurance = $regime_assurance;
	}

	public function getNumero_assure(){
		return $this->numero_assure;
	}

	public function setNumero_assure($numero_assure){
		$this->numero_assure = $numero_assure;
	}

	public function getOrganisme_complementaire(){
		return $this->organisme_complementaire;
	}

	public function setOrganisme_complementaire($organisme_complementaire){
		$this->organisme_complementaire = $organisme_complementaire;
	}

	public function getNumero_complementaire(){
		return $this->numero_complementaire;
	}

	public function setNumero_complementaire($numero_complementaire){
		$this->numero_complementaire = $numero_complementaire;
	}

	public function getAld(){
		return $this->ald;
	}

	public function setAld($ald){
		$this->ald = $ald;
	}

	public function getNumero_ald(){
		return $this->numero_ald;
	}

	public function setNumero_ald($numero_ald){
		$this->numero_ald = $numero_ald;
	}

	public function getSituation_familiale(){
		return $this->situation_familiale;
	}

	public function setSituation_familiale($situation_familiale){
		$this->situation_familiale = $situation_familiale;
	}

	public function getProfession(){
		return $this->profession;
	}

	public function setProfession($profession){
		$this->profession = $profession;
	}

	public function getEmployeur(){
		return $this->employeur;
	}

	public function setEmployeur($employeur){
		$this->employeur = $employeur;
	}

	public function getRegime_alimentaires(){
		return $this->regime_alimentaires;
	}

	public function setRegime_alimentaires($regime_alimentaires){
		$this->regime_alimentaires = $regime_alimentaires;
	}

	public function getDate_deces(){
		return $this->date_deces;
	}

	public function setDate_deces($date_deces){
		$this->date_deces = $date_deces;
	}

	public function getLiue_deces(){
		return $this->liue_deces;
	}

	public function setLiue_deces($liue_deces){
		$this->liue_deces = $liue_deces;
	}

	public function getMedecin_traitant_externe(){
		return $this->medecin_traitant_externe;
	}

	public function setMedecin_traitant_externe($medecin_traitant_externe){
		$this->medecin_traitant_externe = $medecin_traitant_externe;
	}

	public function getDate_derniere_visite(){
		return $this->date_derniere_visite;
	}

	public function setDate_derniere_visite($date_derniere_visite){
		$this->date_derniere_visite = $date_derniere_visite;
	}

	public function getNombre_hospitalisations(){
		return $this->nombre_hospitalisations;
	}

	public function setNombre_hospitalisations($nombre_hospitalisations){
		$this->nombre_hospitalisations = $nombre_hospitalisations;
	}

	public function getRisque_nosocomial(){
		return $this->risque_nosocomial;
	}

	public function setRisque_nosocomial($risque_nosocomial){
		$this->risque_nosocomial = $risque_nosocomial;
	}

	public function getDate_creation(){
		return $this->date_creation;
	}

	public function setDate_creation($date_creation){
		$this->date_creation = $date_creation;
	}
}