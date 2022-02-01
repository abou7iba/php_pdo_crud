<?php
    require_once 'pdoconnection.php'; // Connection To database using PDO statement

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];

    $stmt = $connect->prepare('DELETE FROM users WHERE user_id=:id ');
    $stmt->execute(array('id' => $id));
    header('LOCATION: show.php');

}