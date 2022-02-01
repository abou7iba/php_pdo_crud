<?php 
    require_once 'pdoconnection.php'; // Connection To database using PDO statement

    if(isset($_POST['btninsert'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $connect->prepare('INSERT INTO users (user_id,name,email,password,username) VALUES (?,?,?,?,?)');
    $stmt->execute([null,$name,$email,$password,$username]);
    header('LOCATION: show.php');
}

?>
