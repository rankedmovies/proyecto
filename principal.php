<?php session_start();

    if(isset($_SESSION['usuario'])){
        
        if($_SESSION['usuario'] == "admin"){
            header ('location: admin.php');
        }
        
        require 'prin.php';
    }
    
    else
    
    {
        header ('location: login.php');
    }
        
?>