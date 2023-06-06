<?php
// Include AccountManager class
require_once '../classes/UserManager.php';

session_start();

echo $_SESSION['user_id'] . " ". $_SESSION['account_number'];

// if (isset($_SESSION['user_id'])) {
//     header('Location: dashboard.php');
//     exit();
// }

// Retrieve form inputs
$recipientAccount = $_POST['recipient_account'];
$transferAmount = $_POST['amount'];

// Validate form inputs (add your own validation logic)

// Create an instance of UserManager
$userManager = new UserManager();

// Retrieve sender's account balance from the database
$senderAccountNumber = $_SESSION['account_number']; // Assuming you have the sender's account number stored in the session
$senderBalance = $userManager->getAccountBalance($senderAccountNumber);

// Verify if sender has sufficient funds
if ($senderBalance < $transferAmount) {
    // Display error message to the user
    echo "Insufficient funds. Transfer cannot be completed.";
    exit();
}

// Retrieve recipient's account balance from the database
$recipientBalance = $userManager->getAccountBalance($recipientAccount);

// Update sender's account balance
$newSenderBalance = $senderBalance - $transferAmount;
$userManager->updateAccountBalance($senderAccountNumber, $newSenderBalance);

// Update recipient's account balance
$newRecipientBalance = $recipientBalance + $transferAmount;
$userManager->updateAccountBalance($recipientAccount, $newRecipientBalance);

// Display success message to the user
echo "Transfer completed successfully.";

// Redirect back to the transfer form
header("Location: dashboard.php");
exit();

?>
