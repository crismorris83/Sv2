<?php


    ///si///
    ///Si5//

    ///si2///


     //Si4//

    //si3//

    //////CONTROLLER//////

    require_once "controller/user.controller.php";
    require_once "controller/template.controller.php";

    ////MODELS///////

    require_once "model/dao/user.dao.php";
    require_once "model/dto/user.dto.php";

    ////// CONEXION /////

    require_once "model/conexion.php";

    //// LIBRARY//////

   

    /// start///

    $objrun = new template();
    $objrun -> getIntro();



?>


