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
class Persona {
    public $nome;
    public $cognome;
    public $sesso; 
    public $data_nascita;
    public $codice_fiscale;
    public $email;
    public $telefono;
    
     /**
     * @AssociationType Entity.EAppuntamento
     * @AssociationMultiplicity 0..*
     * @AssociationKind Aggregation
     */
    public $_appuntamento = array();
    
    

    /**
     * 
     * @param type $pnome Il nome della persona
     * @param type $pcognome Il cognome della persona
     * @param type $psesso Il sesso della persona
     * @param type $pdata_nascita La data di nascita della persona
     * @param type $pemail L'email della persona
     * @param type $ptelefono Il numero di telefono della persona
     * @param type $pcodice_fiscale Il codice fiscale della persona
     */
    function __construct($pnome, $pcognome, $psesso,$pdata_nascita,$pemail,$ptelefono, $pcodice_fiscale) {
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
}
?>