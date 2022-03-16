
<br>
<div class="container-fluid">
<br>
    <div id="categories" class="container-fluid">
        <h4>Categories</h4>
        <br>
        <table id="catTable">
            <?php foreach($categories as $cat){
                 print "<tr class='catCols'><td><a class='dropdown-item' href='../assignment2/?visitor/categories/$cat[0]'>$cat[1]</a></td></tr>";
                 }
                    ?>
        </table>
    </div>
    <div id="items" class="container-fluid col-lg-9 col-xl-9 float-right">
        <h4>Search</h4>
        <form class="form-inline ml-auto float-right" method="post">
            <div class="md-form my-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search" value=""> 
            </div>
            <button class="btn btn-primary btn-md my-0 ml-sm-2" type="submit" name="submit" value="search">Search</button>
        </form>

        
 

        <h4><?php print "Search result for $word";?></h4>
        
        <br>
 
        <?php
        
            if($arr[0][0] != ""){                
                 for($i = 0;$i < count($arr);$i++){
                    print "<br>";
                    print "<div class='wrapper'>";
                    print "<figure class='photo'>";
                    print "<img src='".$arr[$i][5]."' alt='Picture Unavailable'>";    
                    print "</figure>";
                    print "<div class='itemContent'>";
                    print "<h4>".$arr[$i][1]."</h4>";
                    print "<p>".$arr[$i][2]."</p></div>";
                    print "<span><i class='fas fa-shopping-cart'>&nbsp;".$arr[$i][3]."</i></span></div></br><hr>";
                    
                 
                }
            }
            else{
                print '<br><br><br>';
                print '<div class="alert alert-danger" role="alert">';
                print '<i class="fas fa-exclamation-circle"></i> No item found with that keyword! Please try again.</div></div>';
            }    
            ?>
        <br>
</div>