<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php include_once "top-nav.php"; ?>
        <form action="signup.php" method="post">
            <div><input type="text" name="username" placeholder="Enter username"></div>
            <div><input type="email" name="email" placeholder="Enter email"></div>
            <div><input type="password" name="password" placeholder="Enter password"></div>
            <div><input type="submit" name="signup" value="Signup"></div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['signup'])) {
    echo "You just hit the server";
    echo "This are the values you sent to me";
    echo "<br>";
    echo $_POST['username'];
    echo $_POST['email'];
    echo $_POST['password'];

    $database_host = "localhost";
    $database_username = "root";
    $database_password = "";
    $database_name = "bank_db";

    $database_connection = new mysqli($database_host, $database_username, $database_password, $database_name);
    if($database_connection->error){
        echo "Error connecting the database";
    }else{
        echo "Connection successful.";
    }
}
?>