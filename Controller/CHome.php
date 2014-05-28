<?php
/**
 * @author Carlo Centofanti
 * @access public
 * @package Controller
 */

class CHome {
    /**
    * imposta la pagina e fornisce i livelli di restrizione in base al tipo utente registrato
    */
    public function impostaPagina () {
        global $config;
        $CRegistrazione=USingleton::getInstance('CRegistrazione');
        $registrato=$CRegistrazione->getUtenteRegistrato();
        $VHome= USingleton::getInstance('VHome');
        //$contenuto=$this->smista();
        //$flibro=USingleton::getInstance('FLibro');
        //$categorie=$flibro->getCategorie();
        //$VHome->impostaTastiCategorie($categorie);
        //$VHome->impostaContenuto($contenuto);
        
        if (!$registrato) {
            $VHome->impostaPaginaGuest();
        } 
        // devo controllare che livello di restrizione applicare (medico, direttore ecc)
        elseif ($registrato=='Medico'){
            $VHome->impostaPaginaMedico();
        }elseif ($registrato=='Direttore'){
            $VHome->impostaPaginaDirettore();
        }elseif ($registrato=='Infermiere'){
            $VHome->impostaPaginaInfermiere();
        }elseif ($registrato=='Paziente'){
            $VHome->impostaPaginaPaziente();
        }
        
        $VHome->mostraPagina();
    }
    //smista serve quando premo nei vari menu per cambiare visualizzazione. (home/calendario/prenota..)
    /**
    public function smista() {
        $view=USingleton::getInstance('VHome');
        switch ($view->getController()) {
            case 'registrazione':
                $CRegistrazione=USingleton::getInstance('CRegistrazione');
                return $CRegistrazione->smista();
            case 'ricerca':
                $CRicerca=USingleton::getInstance('CRicerca');
                return $CRicerca->smista();
            case 'ordine':
                $COrdine=USingleton::getInstance('COrdine');
                return $COrdine->smista();
            default:
                $CRicerca=USingleton::getInstance('CRicerca');
                return $CRicerca->ultimiArrivi();
        }
    }
    */
   
}
?>