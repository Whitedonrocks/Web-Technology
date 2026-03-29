<!-- <?php

    // require_once "connection.php";

    // $selectSQL="SELECT * FROM users";
    // $result=$connection->query($selectSQL);
    // if($result===false){
    //     die("Error selecting records: ");
    // }
    

    // while($row=$result->fetch_assoc()){
    //     echo"<pre>";
    //     print_r($row);
    //     echo"</pre>";
    // }
?> -->

<?php

    require_once "connection.php";

    $searchQuery="J"."%";
    

    $selectSQL="SELECT * FROM users  where fullname LIKE ?";
    $preparedstmt=$connection->prepare($selectSQL);
    $preparedstmt->bind_param("s", $searchQuery);
    $preparedstmt->execute();
    $result=$preparedstmt->get_result();

    if($result->num_rows== 0){
        die("No data in table");
    }
    

    while($row=$result->fetch_assoc()){
        echo"<pre>";
        print_r($row);
        echo"</pre>";
    }
?>