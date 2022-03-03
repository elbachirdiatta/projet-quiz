<?php


if(session_status()==PHP_SESSION_NONE){
session_start();
}

    //inclusion des constantes
     require_once dirname(dirname(__FILE__))."/config/constantes.php";
    //inclusion du Validator
    require_once dirname(dirname(__FILE__))."/config/validator.php";
    //
     require_once dirname(dirname(__FILE__))."/config/orm.php";
    //inclusion des roles
     require_once dirname(dirname(__FILE__))."/config/roles.php";
    //chargement du router
      require_once dirname(dirname(__FILE__))."/config/router.php";