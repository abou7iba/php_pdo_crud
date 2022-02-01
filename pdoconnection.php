<?php 
    $dns = 'mysql:host=localhost;dbname=learn';
    $user = 'root';
    $password = '';
    
    try{
        $connect = new PDO($dns,$user,$password);
        // echo 'You Are Connected';
    }
    catch(PDOException $e){
        echo 'Error ' . $e->getMessage();
    }
?>