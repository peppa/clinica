<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

//se strutturo le classi chiamandole con la prima lettera che rappresenta il package
//posso fare un check sulla prima lettera e caricare gli oggetti giusti dalle
//cartelle giuste. in funzione del 1 carattere della stringa carico da una cartella diversa.

//NOTA: questo trucco non serve se creo dei namespace!!! con i namespace
function __autoload($class_name) {
    switch ($class_name[0]) {
        case 'V':
            require_once ('View/'.$class_name.'.php');
            break;
        case 'F':
            require_once ('Foundation/'.$class_name.'.php');
            break;
        case 'E':
            require_once ('Entity/'.$class_name.'.php');
            break;
        case 'C':
            require_once ('Controller/'.$class_name.'.php');
            break;
        case 'U':
            require_once ('Foundation/Utility/'.$class_name.'.php');
    }
}

?>
