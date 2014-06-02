<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of CLogin
 *
 * @access public
 * @package CLogin
 * @author Carlo
 */
class CLogin {
    private $_username=NULL;
    private $_password=NULL;
    
    
    public function login (){
        $autenticato=FALSE;
        $Session= USingleton::getInstance('USession');
        $VLogin = USingleton::getInstance('VLogin');
        $task=$VLogin->getTask();
        $controller=$VLogin->getController();
        $this->_username=$VLogin->getUsername();
        $this->_password=$VLogin->getPassword();
        if ($Session->leggiValore('username')!=FALSE){
            //è già autenticato
            $autenticato=TRUE;
        }elseif ($task=='autentica' && $controller=='login'){
            //controllo l'autenticazione sul db
            $autenticato=  $this->autentica($this->_username, $this->_password);            
        }// ci manca se deve registrarsi
    }
    
    private function autentica ($pusername, $ppassword){
        
    }
    
}

?>