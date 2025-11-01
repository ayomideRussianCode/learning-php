<?php

//post is meant for secure data
//get is meant for public data



if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // filtering html special characters with htmlspecialchars;

    $username = htmlspecialchars(trim($_POST ["username"]));
    $password = htmlspecialchars(trim($_POST ["password"]));

    if(!empty($username) && !empty ($password)){
        echo "Name: ", $username, "<br>";
        echo "Password: ", $password, "<br>";

    }else {
        echo "Fill in all fields";
    }


    echo $username, "<br>";
    echo $password, "<br>";
} 