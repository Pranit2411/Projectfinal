<?php
    /*
        THis file contains database configuration assuming you are running my sql using user "root" and password ""
    */

    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','pranitM@241101m');
    define('DB_NAME','login');


    // Try connecting to DB

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //check the connection

    if($conn == false)
    {
        dir('Error: Cannot connect');
    }
?>