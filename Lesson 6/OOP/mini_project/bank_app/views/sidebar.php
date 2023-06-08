<!-- sidebar.php -->
<style>
    /* styles.css */

.sidebar {
  width: 250px;
  background-color: #f4f4f4;
  padding: 20px;
  height: 100vh;
}

.sidebar-menu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-menu li {
  margin-bottom: 10px;
}

.sidebar-menu li a {
  display: block;
  text-decoration: none;
  color: #333;
  padding: 10px;
  border-radius: 5px;
}

.sidebar-menu li a:hover {
  background-color: #e5e5e5;
}

</style>

<div class="sidebar">
  <ul class="sidebar-menu">
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="dashboard.php?action=profile">Profile</a></li>
    <li><a href="dashboard.php?action=transaction_history">Transaction History</a></li>
    <li><a href="dashboard.php?action=transfer_funds">Transfer Funds</a></li>
    <li><a href="dashboard.php?action=update_account">Update Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
