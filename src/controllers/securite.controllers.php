<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){ 
        if($_REQUEST['action']=="connexion"){


        
        $login=$_POST['login'];
        $password=$_POST['password'];

        connexion($login,$password);

    }
        
    }
    }
    /**
    * Traitement des Requetes GET
    */
    


    if($_SERVER['REQUEST_METHOD']=="GET"){
       
    if(isset($_GET['action'])){
        if($_REQUEST['action']=="connexion"){
            require_once(PATH_VIEWS."securite/connexion.php");
        }
        else{

            echo "Charger la page de connexion";
            
        }
    }else{
        // echo PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php";die;
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    }
    }



//us1

function connexion(string $login,string $password):void{
    $errors=[];
    champ_obligatoire('login',$login,$errors,"login obligatoire ");
    if( count($errors)==0){
        valid_email('login',$login,$errors);
    }

    champ_obligatoire('login',$login,$errors,"login obligatoire ");

    if(count($errors)==0){
        //appel d'une fonction du models
      $user = find_user_login_password($login,$password);

      if(count($user)!=0){
          
        $_SESSION[KEY_USER_CONNECT]=$user;
        header("location:".WEB_ROOT."?controler=user&action=accueil");
        exit();
      }
      else{
          //utilisateur n' existe pas
          $errors['connexion']="login ou mot de passe incorrecte";
          $_SESSION[KEY_ERRORS]=$errors;
          header("location:".WEB_ROOT);
          exit();
      }
    }
      else{
          //erreur de validation
          $_SESSION[KEY_ERRORS]=$errors;
          header("location:".WEB_ROOT);
          exit();

      
    
}
}












