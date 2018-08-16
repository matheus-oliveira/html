<?php

    session_start();
    // Desativando erros.
    error_reporting(2048);
    ini_set('display_errors',0);
    ini_set('track_errors',1);

    //Incluindo a classe
    require_once('fileBrowser.class.php');

    //Instanciando o objeto
    $fb = new fileBrowser("uploads","uploadstemp","browser.php",true,"browser_1","Portugues");

    //Setando erros para verdadeiro
    $fb->Errors_reporting = true;

    //Exibindo grid
    echo $fb->draw();
?>
