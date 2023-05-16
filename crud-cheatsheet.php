<?php
$servername = "localhost"; // Replace with your server name
$username = "your_username"; // Replace with your username
$password = "your_password"; // Replace with your password
$database = "your_database"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// SQL query to insert a new record
$sql = "INSERT INTO table_name (column1, column2, column3) VALUES ('value1', 'value2', 'value3')";

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<?php
// SQL query to select records
$sql = "SELECT * FROM table_name";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Column1: " . $row["column1"]. " - Column2: " . $row["column2"]. " - Column3: " . $row["column3"]. "<br>";
    }
} else {
    echo "No records found";
}
?>

<?php
// SQL query to update a record
$sql = "UPDATE table_name SET column1='new_value1', column2='new_value2' WHERE id=1";

if ($conn->query($sql) === true) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>

<?php
// SQL query to delete a record
$sql = "DELETE FROM table_name WHERE id=1";

if ($conn->query($sql) === true) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>

<?php
// Close connection
$conn->close();
?>
