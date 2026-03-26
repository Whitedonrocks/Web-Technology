<?php   
    session_start();

    if(!isset($_SESSION['count']))
        {
            $_SESSION['count']=0;
        }
        $_SESSION['count']++;
        $count= $_SESSION['count'];
    

    echo "You have visited this page ". $count. " times.<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refresh Count</title>
</head>
<body>
    <a href="./task2_reset.php"><h1>Click Me to Reset<h1></a>
</body>
</html>