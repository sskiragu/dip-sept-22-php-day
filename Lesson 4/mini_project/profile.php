<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        table, tr, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
    <?php
        echo "<table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th colspan='2'>Action</th>
            </tr>";
            include_once "database-config.php";
            $sql = "SELECT * FROM users WHERE username='john'";
            $result = $database_connection->query($sql);
            // var_dump($result);
            $row = $result->fetch_assoc();
            echo "<tr>
                    <td>" . $row['username']. "</td>
                    <td>".$row['email']."</td>
                    <td>".$row['password']."</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>";
        echo "</table>";
?>
    </div>
</body>
</html>