<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dashboard-header ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h6><?php echo "Welcome ".$_SESSION['username']; ?></h6>
        <nav>
            <div class="dashboard-header">
                <ul>
                    <li><a href="dashboard.php?id=profile">Profile</a></li>
                    <li><a href="dashboard.php?id=statements">View statements</a></li>
                    <li><a href="dashboard.php?id=loans">Apply Loan</a></li>
                    <li><a href="dashboard.php?id=reports">Reports</a></li>
                    <li><a href="dashboard.php?id=logout">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>
<?php
if (isset($_GET['id'])) {
    $selected =  $_GET['id'];
    switch ($selected) {
        case 'profile':
            include_once "profile.php";
            break;
        case 'statements':
            echo "You selected statements";
            break;
        case 'loans':
            echo "You selected loans";
            break;
        case 'reports':
            echo "You selected reports";
            break;
        case 'logout':
            echo "You selected logout";
            break;
        
        default:
            # code...
            break;
    }
}
?>