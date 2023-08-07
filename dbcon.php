<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "sxnarrucia");
    define("PASSWORD", "Fundamentos1!");
    define("DATABASE", "CRUD_Sistemas");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    
    if (!$connection) {
        die("Connection Failed");
    } 
    
?>