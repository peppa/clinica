<?php
//questa pagina si occupa di lanciare il sito vero e proprio
//importo le classi e il file di configurazione globale
require_once 'config/autoload.inc.php';
require_once 'config/config.inc.php';


$CHome=USingleton::getInstance('CHome');
$CHome->impostaPagina();
?>

