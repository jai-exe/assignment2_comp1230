<?php

//include all config files
include 'app/config/item.php';
include 'app/config/category.php';
include 'app/config/temp.php';

//to select data from item database and insert it in items array
{
    $query = "SELECT id, title, `desc`, price, cat_id FROM items";
    $result = $connection->query($query);
    $counter = 0;
    
    while($row = $result->fetch(PDO::FETCH_NUM)){
        
        $items[$counter][0] = $row[0];
        $items[$counter][1] = $row[1];
        $items[$counter][2] = $row[2];
        $items[$counter][3] = $row[3];
        $items[$counter][4] = $row[4];
        $counter++;
    }
   
}

{
    $query = "SELECT c.id, c.`name`, c.`desc`, count(*) FROM category c INNER JOIN items i ON c.id = i.cat_id GROUP BY c.id";
    $result = $connection->query($query);
    $counter = 0;
    
    while($row = $result->fetch(PDO::FETCH_NUM)){
        
        $categories[$counter][0] = $row[0];
        $categories[$counter][1] = $row[1];
        $categories[$counter][2] = $row[2];
        $categories[$counter][3] = $row[3];
       
        $counter++;
    }
   
}

//code to categories the items and view them by category
if($function == 'categories'){
    
    $query = "SELECT id, title, `desc`, price, cat_id FROM items WHERE cat_id = '$viewCat'";
    $result = $connection->query($query);
    $counter = 0;
    
    while($row = $result->fetch(PDO::FETCH_NUM)){
        
        $temp[$counter][0] = $row[0];
        $temp[$counter][1] = $row[1];
        $temp[$counter][2] = $row[2];
        $temp[$counter][3] = $row[3];
        $temp[$counter][4] = $row[4];
        $counter++;
    } 
}