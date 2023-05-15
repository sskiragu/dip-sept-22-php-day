<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grading System</h1>
    <form action="grading.php" method="post">
        <input type="number" name="score" placeholder="Enter score">
        <input type="submit" name="compute" value="Compute Grade">
    </form>
</body>
</html>
<?php
if(isset($_POST['compute'])){
    $score = $_POST['score'];
    if($score < 50){
        echo "F";
    }elseif($score < 60){
        echo "C";
    }elseif($score < 70){
        echo "B";
    }else{
        echo "A";
    }
}
?>