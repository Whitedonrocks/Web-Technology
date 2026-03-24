<?php
    // Start the session
    session_start();

    // $islogin = $_SESSION['islogin'];
    // if($islogin)
    //     {
    //         echo "Welcome to the home page! User is Login In";
    //     }

        if(!isset($_SESSION['userIsLogin'])|| $_SESSION['userIsLogin'] == false){
            header('Location: /login.php');
            exit(0);
        }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Home Page</h1>

    <form action="/logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>
</html>