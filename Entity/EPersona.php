<?php
/**
 * @access public
 * @author Carlo Centofanti
 * @package Entity
 */



/*
 * le classi entità non hanno bisogno di avere gli attributi privati.
 * l'utilizzatore delle entità conosce gli attributi e come usarli/ modificarli.
 * questo mi risparmia di scrivere 100 get/set inutili.
 */


/**
 * Persona è una classe che contiene i dati di una persona.
 * contiene nome, cognome e sesso
 */
class EPersona {
    private $nome;
    private $cognome;
    private $sesso; 
    private $data_nascita;
    private $codice_fiscale;
    private $email;
    private $telefono;
    
     /**
     * @AssociationType Entity.EAppuntamento
     * @AssociationMultiplicity 0..*
     * @AssociationKind Aggregation
     */
    private $_appuntamento = array();
    
    

    /**
     * costruttore di persona. deve avere tutti i campi
     * 
     * @param string $pnome Il nome della persona
     * @param string $pcognome Il cognome della persona
     * @param string $psesso Il sesso della persona
     * @param type $pdata_nascita La data di nascita della persona
     * @param string $pemail L'email della persona
     * @param string $ptelefono Il numero di telefono della persona
     * @param string $pcodice_fiscale Il codice fiscale della persona
     */
    function __construct($pnome, $pcognome, $psesso, $pdata_nascita, $pemail, $ptelefono, $pcodice_fiscale) {
        $this->nome=$pnome;
        $this->cognome=$pcognome;
        $this->sesso=$psesso;
        $this->data_nascita=$pdata_nascita;
        $this->email=$pemail;
        $this->telefono=$ptelefono;
        $this->codice_fiscale=$pcodice_fiscale;
    } 
    
     
    
      //metodi:
    
    
    
    /**
     * Fa un push nell'array degli appuntamenti di una data persona.
     * 
     * @access public
     * @param Entity.EAppuntamento aParameter
     * @return boolean
     * @ParamType aParameter Entity.EAppuntamento
     * @ReturnType boolean
     */
    public function addAppuntamento(EAppuntamento $pappuntamento) {
        array_push($this->_appuntamento, $pappuntamento);
    }
    
    
     /**
     * Restituisce un array di commenti relativi al libro
     *
     * @access public
     * @return array
     * @ReturnType array
     */
    public function getAppuntamenti() {
        return ($this->_appuntamenti);
    }
    
    
    //getter e setter degli attributi semplici
    
    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getSesso(){
        return $this->sesso;
    }
    public function getDataNascita(){
        return $this->data_nascita;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getCodiceFiscale(){
        return $this->codice_fiscale;
    }
    
    
    public function setNome($pnome){
        $this->nome=$pnome;
    }
    public function setCognome($pcognome){
        $this->cognome=$pcognome;
    }
    public function setSesso($psesso){
        $this->sesso=$psesso;
    }
    public function setDataNascita($pdata_nascita){
        $this->data_nascita=$pdata_nascita;
    }
    public function setEmail($pemail){
        $this->email=$pemail;
    }
    public function setTelefono($ptelefono){
        $this->telefono=$ptelefono;
    }
    public function setCodiceFiscale($pcodice_fiscale){
        $this->codice_fiscale=$pcodice_fiscale;
    }

}
?>