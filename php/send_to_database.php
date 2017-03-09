<?php

    // Prepare variables for database connection
   
    $dbusername = "kajan";  
    $dbpassword = "test";  
    $server = "localhost"; 

    // Connect to your database

    $dbconnect = mysql_connect($server, $dbusername, $dbpassword);
    $dbselect = mysql_select_db("test",$dbconnect);

    // Prepare the SQL statement

    $sql = "INSERT INTO test.sensor (value) VALUES ('".$_GET["value"]."')";    

    // Execute SQL statement

    mysql_query($sql);

?>