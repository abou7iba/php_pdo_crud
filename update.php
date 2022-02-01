<link rel="stylesheet" href="style.css">
<?php
require_once 'pdoconnection.php'; // Connection To database using PDO statement

if(isset($_GET['update_id'])){
    $id = $_GET['update_id'];

    $stmt = $connect->prepare("SELECT * FROM users WHERE user_id=:id");
    $stmt->execute(array('id' => $id));
    $rows = $stmt->fetchAll();
    }
    foreach($rows as $row) {
        $name =  $row['name'];
        $username =   $row['username'] ;
        $email =   $row['email'];
        $password =   $row['password'];
    }
?>
<center>
<form action="" method="post">
    <input type="text" placeholder="Name" name="updatename" value="<?php echo $name ?>"><br>
    <input type="text" placeholder="Username" name="updateusername" value="<?php echo $username ?>"><br>
    <input type="email" placeholder="Email" name="updateemail" value="<?php echo $email ?>"><br>
    <input type="text" placeholder="Password" name="updatepassword" value="<?php echo $password ?>"><br>
    <input type="submit" value="Update" name="btnupdate">
</form>
<?php 

if(isset($_POST['btnupdate'])){
    $updatename = $_POST['updatename'];
    $updateusername = $_POST['updateusername'];
    $updateemail = $_POST['updateemail'];
    $updatepassword = $_POST['updatepassword'];

    $stmt = $connect->prepare('UPDATE users SET name=:name, email=:email, password=:password, username=:username WHERE user_id=:id ');
    $stmt->execute(array(
        'name' => $updatename,
        'email' => $updateemail, 
        'password' => $updatepassword, 
        'username' => $updateusername, 
        'id' => $id
    ));
    header('LOCATION: show.php');
}
?>
</center>