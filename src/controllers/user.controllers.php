use<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){ 
        if($_REQUEST['action']=="connexion"){
        echo "traiter le formulaire de connexion";
    }
        
    }
    }
    /**
    * Traitement des Requetes GET
    */
    if($_SERVER['REQUEST_METHOD']=="GET"){ 

      
        
    if(isset($_GET['action'])){
        if($_REQUEST['action']=="connexion"){
            echo "traiter le formulaire de connexion";
        }
        
    }
    }


    if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['action'])){
        if($_REQUEST['action']=="connexion"){
            require_once(PATH_VIEWS."securite/connexion.php");
        }
    }
    }















