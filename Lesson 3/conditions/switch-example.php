<?php
$selected = 'profile';
switch ($selected) {
    case 'profile':
        echo "Profile Page";
        break;
    case 'reports':
        echo "Reports Page";
        break;
    case 'settings':
        echo "Settings Page";
        break;
    case 'logout':
        echo "Logout Page";
        break;
    
    default:
        echo "Page not found";
        break;
}
?>