<?php   
    session_start();

    $_SESSION['username']='Prayag';
    $username= $_SESSION['username'];

    echo "Hello,".$username . "! Your session ID is:". session_id();

?>
