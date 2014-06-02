<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of VLogin
 *
 * @access public
 * @package VLogin
 * @author Carlo
 */
class VLogin extends View{
    /**
     * restituisce la password passata tramite GET o POST
     *
     * @return mixed
     */
    public function getPassword() {
        if (isset($_REQUEST['password']))
            return $_REQUEST['password'];
        else
            return false;
    }
    /**
     * restituisce la username passata tramite GET o POST
     *
     * @return mixed
     */
    public function getUsername() {
        if (isset($_REQUEST['username']))
            return $_REQUEST['username'];
        else
            return false;
    }
    /**
     * restituisce la task
     * @return mixed
     */
    public function getTask() {
        if (isset($_REQUEST['task']))
            return $_REQUEST['task'];
        else
            return false;
    }
    /**
     * restituisce il controller
     * @return mixed
     */
    public function getController() {
        if (isset($_REQUEST['controller']))
            return $_REQUEST['controller'];
        else
            return false;
        
    }
    public function processaTemplate() {
        $contenuto=$this->fetch('login.tpl');
        return $contenuto;
    }
   

}

?>