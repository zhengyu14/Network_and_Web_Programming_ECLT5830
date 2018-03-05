<?php
//  Bootstrapping for the whole app
//  Things to do here:
//    - Define constants
//    - Join session
//    - Make connection to DB (if any)

// === Defining constants ===

// All files belonging to the app are placed relatively to
// http://localhost/5830/demo_app/
define('APP_ROOT_FOLDER', '/asgn3');

DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');          // Default password for root in XAMPP
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'asgn3');

// Establish connection (exit when connection to DB failed)
$db = @mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME )
       OR exit('Could not connect to MySQL: ' . mysqli_connect_error());

// === Join session automatically ===
session_start();
