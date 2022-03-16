<?php

//include all the config files

include '../assignment2/app/config/item.php';
include '../assignment2/app/config/category.php';
include '../assignment2/app/config/temp.php';

if(isset($_POST['submit'])){
    //add item
    if($_POST['submit'] == 'submit'){
    $query = "SELECT count(*) FROM items";
    $result = $connection->query($query);
    $row = $result->fetch(PDO::FETCH_NUM);
    $id = $row[0] + 1;
    
    $query = "INSERT INTO `items` (`id`, `title`, `desc`, `price`, `cat_id`, `status`, `front_page`) VALUES ('$id','$title','$description','$price','$category','$status','$front_page')";
    $connection->query($query);
    }

    //modify item
    if($_POST['submit'] == 'modify'){
    $id = $extra;
    $query = "UPDATE `items` SET `title`='$title',`desc`='$description',`price`='$price',`cat_id`='$category',`status`='$status',`front_page`='$front_page' WHERE `id`='$id'";
    $connection->query($query);
    }
}
if(isset($_POST['logout'])){
    
    // Initialize the session
    session_start();

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session.
    session_destroy();

    // Redirect to login page
    header("location: ../assignment2?visitor/index");
    exit;


}
// delete Items
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $connection->query("DELETE FROM items WHERE id='$id')");
}

if(isset($_POST['csubmit'])){
    //add category
    if($_POST['csubmit'] == 'submit'){
        $query = "INSERT INTO `category` (`name`, `desc`, `status`) VALUES('$ctitle', '$cdescription', '$cstatus')";
        $connection->query($query);
    }

    //modify category
    if($_POST['csubmit'] == 'modify'){
    $id = $extra;
    $query = "UPDATE `category` SET `name`='$ctitle',`desc`='$cdescription',`status`='$cstatus' WHERE id='$id'";
    $connection->query($query);
    }
}

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
if($function == 'viewCategory'){
    
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

?>