<?php
    require_once 'insert.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src=""></script>
    <script>

    </script>
    <title>CRUD PHP</title>
</head>
<body>
    <!-- INSERT -->
    <center>
        <form action="insert.php" method="post">
            <input type="text" placeholder="Name" name="name" required><br>
            <input type="text" placeholder="Username" name="username" required><br>
            <input type="email" placeholder="Email" name="email" required><br>
            <input type="password" placeholder="Password" name="password" required><br>
            <input type="submit" value="Save" name="btninsert">
        </form>
        <?php
        require_once 'select.php';
        ?>
    </center>
    <!-- / INSERT -->
</body>
</html>