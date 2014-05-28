<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

global $config;

//progettazione guidata dei dati.
//questo è un file di configurazione, qui dovrei trovare tutto!!! però per esempio
//qui non c'è il numero di pagine della paginazione!!! va inserito!!

$config['nomeClinica']='Clinica';

//SMARTY
$config['smarty']['template_dir'] = 'templates/template/';
$config['smarty']['compile_dir'] = 'templates/templates_c/';
$config['smarty']['cache_dir']= 'templates/cache';
$config['smarty']['config_dir']= 'templates/configs';

//MYSQL:
//attivare per abilitare il debug del mysql
$config['debug']=false;
$config['mysql']['user'] = 'root';
$config['mysql']['password'] = 'pippo';
$config['mysql']['host'] = 'localhost';
$config['mysql']['database'] = 'bookstore';

//configurazione server smtp per invio email
$config['smtp']['host'] = 'smtp.cheapnet.it';
$config['smtp']['port'] = '25';
$config['smtp']['smtpauth'] = false;
$config['smtp']['username'] = '';
$config['smtp']['password'] = '';

$config['email_webmaster']='webmaster@bookstore.lamjex.com';

function debug($var){
    global $config;
    if ($config['debug']){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

?>
