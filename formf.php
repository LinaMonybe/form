<?php

if (!empty($_GET['fname']) && !empty($_GET['lname'])) {
    $firstName = htmlspecialchars($_GET['fname']);
    $lastName = htmlspecialchars($_GET['lname']);
    echo "You entered First Name: " . $firstName . " and Last Name: " . $lastName;
} else {
    echo "Please enter both a first and last name.";
}
 ?>