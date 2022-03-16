<?php
include 'app/database/db_connect.php';

$viewCat = $extra;
$function = $view;

if($_POST['submit'] == 'login'){
    $un = isset($_POST['username'])?trim($_POST['username']):"";
    $psw = isset($_POST['password'])?md5($_POST['password']):"";
    
   

    $sql = "SELECT id, username, `password` FROM members WHERE username = '$un'";
        
        $result = $connection->query($sql);
        
        if($row = $result->fetchAll(PDO::FETCH_NUM)){
           
          
                $id = $row[0][0];
                $username = $row[0][1];
                $hashed_password = $row[0][2];
                
                if ($psw == $hashed_password) {
                    // Password is correct, so start a new session
                    session_start();
    
                    // Store data in session variables
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    $user = "admin";
                    header("location: ../assignment2/?$user/index");
                   
    
                }
            
            else{
                  
                    header("location: ../assignment2/?visitor/login");
                    
                }
        
        } 
}
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

include 'app/models/visitor.php';

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