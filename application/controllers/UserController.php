<?php

class UserController{

    public function show($id){
        $id = $_GET['param'];
        $user = [ 'id' => $id, 'nom' =>'Marie'];
       return json_encode($user);


    }


}