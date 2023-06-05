<?php
require_once 'Database.php';
// classes/UserManager.php
class UserManager {
    private $db;

    public $host = 'localhost';
    public $dbname = 'bank_db';
    public $username = 'root';
    public $password = '';

    public function __construct() {
        // Establish database connection or initialize any necessary dependencies
        $this->db = new Database($this->host, $this->dbname, $this->username, $this->password); // Replace with your database connection logic
    }

    public function registerUser($user) {
        // Save the user data to the database
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $params = array($user->getUsername(), $user->getEmail(), $user->getPassword());
        $this->db->execute($sql, $params); // Replace with your database query execution logic
    }

    public function loginUser($username, $password) {
        // Check if the username and password match a user in the database
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $params = array($username, $password);
        $result = $this->db->execute($sql, $params); // Replace with your database query execution logic

        if ($result && $result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return null;
    }

    // Add other methods for user management, such as getUserById(), updateProfile(), deleteProfile(), etc.
}
