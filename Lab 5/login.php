<?php
    require_once('./connection.php');
    // handle post request
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
        $formData = $_POST;


        $email = trim($formData['email'] ?? '');
        $password = trim($formData['password'] ?? '');

        $errors = [];



        //email validation
        if($email === ''){
            $errors['email'] = 'Email is required';
        }else if($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $errors['email'] = 'Invalid email format';
        }else{
            $userExistsSQL = "SELECT * FROM users WHERE email = ?";
            $userExistsStmt = $connection->prepare($userExistsSQL);
            $userExistsStmt->bind_param("s", $email);
            $userExistsStmt->execute();
            $result = $userExistsStmt->get_result();

            if($result->num_rows === 0){
                $errors['email'] = 'Email is not registered';
            }
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
            $registredUserSQL = "SELECT * FROM users WHERE email = ? and password = ?";
            $registredUserStmt = $connection->prepare($registredUserSQL);
            $registredUserStmt->bind_param("ss", $email, $password);
            $registredUserStmt->execute();
            $result = $registredUserStmt->get_result();
            if($result->num_rows > 0){
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
            <button type="submit" class="loginBtn">Login</button>
        </form>
    </div>

    <!-- <script src="./script.js"></script> -->
</body>
</html>