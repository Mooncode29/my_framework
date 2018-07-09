<?php


require '../application/controllers/UserController.php';

/*if(isset($_GET['controller'])){

}*/
//echo $_GET['controller'];


if(isset($_GET['controller'])=="UserController"&& isset($_GET['action'])=="show" && isset($_GET['param'])){

    $a = "UserController";
    $b = new $a;
   echo $b->show($_GET['param']);
}









