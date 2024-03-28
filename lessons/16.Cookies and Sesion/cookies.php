<?php

    $cookie_name = "User";
    $cookie_value = "Habil Velija";
    setcookie($cookie_name,$cookie_value, time()+5, "/");
     
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "COOKIE '" . $cookie_name . "' is not set!";
    }
    else
    {
        echo "COOKIE '" . $cookie_name . "' is set!<br>";
        echo "Value is: ".$_COOKIE[$cookie_name];

    }