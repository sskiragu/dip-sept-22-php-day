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
        // Generate account_number for the new user
        $accountNumber = $this->generateAccountNumber();

        // Set initial balance for the new user
        $initialBalance = 0;

        // Save the user data to the database
        $sql = "INSERT INTO users (username, email, password, account_number, balance) VALUES (?, ?, ?, ?, ?)";
        $params = array($user->getUsername(), $user->getEmail(), $user->getPassword(), $accountNumber, $initialBalance);
        $this->db->execute($sql, $params);
    }

    private function generateAccountNumber() {
        // Generate a unique account number
        // Implement your own logic to generate account numbers, e.g., using random numbers or a combination of user details

        // Example: Generate a 10-digit account number
        $accountNumber = mt_rand(1000000000, 9999999999);

        return $accountNumber;
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

    public function getUserById($userId) {
        // Retrieve user data from the database based on the provided user ID
        $sql = "SELECT * FROM users WHERE user_id = ?";
        $params = array($userId);
        $result = $this->db->execute($sql, $params); // Replace with your database query execution logic

        if ($result && $result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return null;
    }

    public function getTransactionsByUserId($userId) {
        // Retrieve transactions associated with the provided user ID
        $sql = "SELECT * FROM transactions WHERE user_id = ?";
        $params = array($userId);
        $result = $this->db->execute($sql, $params); // Replace with your database query execution logic

        if ($result && $result->rowCount() > 0) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return array();
    }

    public function recordTransaction($senderAccount, $recipientAccount, $amount, $userID) {
        $dateTime = date('Y-m-d H:i:s');

        // Insert the transaction into the database
        $sql = "INSERT INTO transactions (sender_account, recipient_account, amount, date_time, user_id) VALUES (?, ?, ?, ?, ?)";
        $params = array($senderAccount, $recipientAccount, $amount, $dateTime, $userID);
        $this->db->execute($sql, $params);
    }

    public function updateAccountBalance($accountNumber, $newBalance) {
        $sql = "UPDATE users SET balance = ? WHERE account_number = ?";
        $params = array($newBalance, $accountNumber);
        $this->db->execute($sql, $params);
    }

    public function getAccountBalance($accountNumber) {
        $sql = "SELECT balance FROM users WHERE account_number = ?";
        $params = array($accountNumber);
        $result = $this->db->execute($sql, $params); // Execute the query
        $row = $result->fetch(); // Fetch the result row
        return $row['balance']; // Return the balance column value
    }

    // Add other methods for user management, such as getUserById(), updateProfile(), deleteProfile(), etc.
}
