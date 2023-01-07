<?php //This is used to connect to the database 'exercises'
    $dbName = "exercises";
    $dbConn = mysqli_connect('localhost', 'root', '', 'exercises');
    if(!$dbConn)
    {
        die('Could not connect: '.mysqli_connect_error());
    }
?>