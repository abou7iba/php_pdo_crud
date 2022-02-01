    <?php
        require_once 'pdoconnection.php'; // Connection To database using PDO statement

        $stmt = $connect->prepare("SELECT * FROM users");
        $stmt->execute() ;
        $rows = $stmt->fetchAll();
    ?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src=""></script>
    <script>

    </script>
    <title>CRUD PHP</title>
</head>
    <!-- SELECT && UPDATE && DELETE -->
    <center>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Password</td>
                <td>Delete</td>
                <td>Update</td>
            </tr>
        </thead>
        <tbody>

            <?php  
                foreach($rows as $row) {
                    $user_id = $row['user_id'];
                    $name =  $row['name'] ;
                    $username =   $row['username'] ;
                    $email =   $row['email'];
                    $password =   $row['password'];
            ?>
            <tr>

            <td><?php  echo $user_id ?></td>
                <td><?php echo $name?></td>
                <td><?php  echo $username ?></td>
                <td><?php  echo $email ?></td>
                <td><?php  echo $password ?></td>
                <td><a href="<?php echo 'delete.php?delete_id='.$user_id ?>" >Delete</a></td>
                <td><a href="<?php echo 'update.php?update_id='.$user_id ?>" >Update</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </center>
    <!-- / SELECT && UPDATE && DELETE -->
