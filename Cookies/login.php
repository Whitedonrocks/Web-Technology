<?php

    session_start();

        if(isset($_SESSION['userIsLogin']) && $_SESSION['userIsLogin'] === true){
            header('Location: /home.php');
            exit;
        }



        // Set Cookie using php
        // setcookie("email", "john@example.com", time()+86400);

        // $cookies=$_COOKIE;
        // print_r($cookies);


        // Save data to session
        $_SESSION['userIsLogin'] = true;


    // handle post request
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
        $formData = $_POST;


        $registredUser = ['prayag1@gmail.com' => 'prayag123', 'manjil@gmail.com' => 'manjil123','bikash@gmail.com' => 'bikash123'];

        $email = trim($formData['email'] ?? '');
        $password = trim($formData['password'] ?? '');

        $errors = [];



        //email validation
        if($email === ''){
            $errors['email'] = 'Email is required';
        }else if($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $errors['email'] = 'Invalid email format';
        }else if($email !== '' && !in_array($email, array_keys($registredUser))){
            $errors['email'] = 'Email is not registered';
        }

        //password validation
        if($password === ''){
            $errors['password'] = 'Password is required';
        }else if ($password !== '' && strlen($password) < 6){
            $errors['password'] = 'Password must be at least 6 characters';
        }


        if( empty($errors) ){
            //form is valid. Proceed 
            // echo "Form submitted successfully!";
            if($password === $registredUser[$email]){
                $_SESSION['userIsLogin'] = true;
                header('Location: home.php');
            }else{
                $errors['password'] = 'Incorrect password';
            }
        }

    }






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="/login.php" name="loginForm" method="post">
            <h2>Login To Your Account</h2>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="<?= isset($errors['email']) ? 'error-input' : '' ?>" name="email" id="email">
                <span class="error-text" id="emailErrorText">
                    <?= isset($errors['email']) ? $errors['email'] : '' ?>
                </span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="<?= isset($errors['password']) ? 'error-input' : '' ?>" name="password" id="password">
                <span class="error-text" id="passwordErrorText">
                    <?= isset($errors['password']) ? $errors['password'] : '' ?>
                </span>
            </div>
            <button type="submit" class="registerBtn">Login</button>
        </form>
    </div>

    <!-- <script src="./script.js"></script> -->
</body>
</html>