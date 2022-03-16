<?php
include 'app/database/db_connect.php';




$title = isset($_POST['title'])?$_POST['title']:"Item Title";
$description = isset($_POST['description'])?$_POST['description']:"Item Description";
$category = isset($_POST['category'])?$_POST['category']:"";
$price = isset($_POST['price'])?$_POST['price']:"0.00";
$status = isset($_POST['status'])?$_POST['status']:"SHOW";
$front_page = "YES";
$picture = isset($_POST['picture'])?$_POST['picture']:"img/unavailable.jpg";

$ctitle = isset($_POST['ctitle'])?$_POST['ctitle']:"Category Title";
$cdescription = isset($_POST['cdescription'])?$_POST['cdescription']:"Item Description";
$cstatus = isset($_POST['cstatus'])?$_POST['cstatus']:"SHOW";
$function = $view;

$viewCat = $extra;

if(isset($_POST['submit'])){
    if($_POST['submit'] == 'search'){
        if(isset($_POST['search'])){
            if($_POST['search'] == ""){
                $search = "";
                header("location: ../assignment2/?visitor/search");
            }
            else{
            $search = $_POST['search'];
            }
    }
}
}

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
        $query = "SELECT count(*) FROM category";
        $result = $connection->query($query);
        $row = $result->fetch(PDO::FETCH_NUM);
        $id = $row[0] + 1;
        $query = "INSERT INTO `category` (`id`,`name`, `desc`, `status`) VALUES('$id', '$ctitle', '$cdescription', '$cstatus')";
        $connection->query($query);
    }

    //modify category
    if($_POST['csubmit'] == 'modify'){
    $id = $extra;
    $query = "UPDATE `category` SET `name`='$ctitle',`desc`='$cdescription',`status`='$cstatus' WHERE `id`='$id'";
    $connection->query($query);
    }
}

include 'app/models/admin.php';
//code to search item   
if($function == 'search'){
    $word = $search;
    
    $query = "SELECT id, title, `desc`, price, cat_id FROM items WHERE title LIKE '%$word%'";
    $result = $connection->query($query);
    $counter = 0;
    
    while($row = $result->fetch(PDO::FETCH_NUM)){
        
        $arr[$counter][0] = $row[0];
        $arr[$counter][1] = $row[1];
        $arr[$counter][2] = $row[2];
        $arr[$counter][3] = $row[3];
        $arr[$counter][4] = $row[4];
        $counter++;
  
}
   
  
}

?>