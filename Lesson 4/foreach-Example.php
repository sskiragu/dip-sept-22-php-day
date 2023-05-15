<?php
// indexed array
$colors = array("Red", "Green", "Blue");
foreach ($colors as $key => $value) {
    echo $value.", ";
}
echo "<br>";
// associative array
$input_values = array("username" => "doe", "email" => "doe@gmail.com", "password" => "45$$$");
foreach ($input_values as $key => $value) {
    echo $key.": ".$value. "<br>";
}
?>