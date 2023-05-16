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

    $username  = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    include_once "database-config.php";

    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$pwd')";
   if ($database_connection->query($sql) === TRUE) {
    echo "Successfully registered";
   }else{
    echo "Registration failed";
   }
}
?>