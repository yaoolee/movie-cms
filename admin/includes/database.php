<?php
/*
$connect = mysqli_connect( 
    "sql305.infinityfree.com", // Host
    "if0_39209067", // Username
    "VvFKWs4ldkhgG", // Password
    "if0_39209067_phpcms" // Database
);

mysqli_set_charset( $connect, 'UTF8' );
*/
$connect = mysqli_connect( 
    "localhost",      
    "root",       
    "root", 
    "phpcms",
    8889 
);

if (!$connect) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset( $connect, 'UTF8' );