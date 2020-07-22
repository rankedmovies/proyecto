<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'prin.php';
    }else{
        header ('location: login.php');
    }
        
?>