<!DOCTYPE html>
<html>
<head>
    <title>Banking Dashboard</title>
    <link rel="stylesheet" href="../public/assets/css/styles.css">
</head>
<body>
    <h1>Welcome to Your Banking Dashboard <span><a href="logout.php">Logout</a> <!-- Logout link or button --></span></h1>

    <h2>Account Summary</h2>
    <p>Account Number: <?= $accountNumber ?></p>
    <p>Balance: $<?= $balance ?></p>

    <h2>Transactions</h2>
    <table>
        <tr>
            <th>Transaction ID</th>
            <th>Sender Account</th>
            <th>Recipient Account</th>
            <th>Amount</th>
            <th>date_time</th>
        </tr>
        <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $transaction['id'] ?></td>
                <td><?= $transaction['sender_account'] ?></td>
                <td><?= $transaction['recipient_account'] ?></td>
                <td><?= $transaction['amount'] ?></td>
                <td><?= $transaction['date_time'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Transfer Funds</h2>
    <form method="POST" action="process_transfer.php">
        <label for="recipient">Recipient:</label>
        <input type="text" name="recipient_account" id="recipient" required>

        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required>

        <button type="submit">Transfer</button>
    </form>

    <script src="js/script.js"></script>
</body>
</html>
