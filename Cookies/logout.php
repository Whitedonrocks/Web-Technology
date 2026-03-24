<?php

       session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
     
        session_destroy();
        header('Location: /login.php');
        exit(0);
    }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
</body>
</html>