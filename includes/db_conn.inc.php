<?php

    define("DB_HOST", "localhost");
    //define("DB_USER", "phpmyadmin");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "med-register");

    $db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if (!$db_conn) {
        die("Failed to connect to MySQL Server! " . mysqli_connect_error());
    } else {
        // Set the character set for the connection
        mysqli_set_charset($db_conn, "utf8");

    }