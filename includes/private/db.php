<?php
    
    $dbcon = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    
    if($dbcon === false){
        die("ERROR: Could not connect to database. " . mysqli_connect_error());
    }
?>