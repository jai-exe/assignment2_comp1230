<?php

/*
   User: f0t39_user1
   Database: f0t39_assignment2
 */

try {
    $dns = "mysql:host=f0t39.gblearn.com;dbname=f0t39_assignment2;";
    $username = "f0t39_user1";
    $password = "iH#ao7F)4RBL";

    $connection = new PDO($dns, $username, $password);
    
}

catch (Exception $e) {
    print  "Error: ";
    print $e->getMessage();

}