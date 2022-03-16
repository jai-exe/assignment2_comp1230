<br>
<div class="container-fluid">
    <div id="categories" class="container-fluid">
        <h4>Categories</h4>
        <br>
        <table id="catTable">
        <?php foreach($categories as $cat){
                     print "<tr class='catCols'><td><a class='dropdown-item' href='../assignment2/?admin/viewCategory/$cat[0]'>$cat[1]</a></td></tr>";
                     }
                        ?>
        </table>
    </div>

    <div id="items" class="container-fluid col-lg-9 col-xl-9">
        <h4>Items</h4>
        <button class="btn btn-primary float-right" name="additem" onclick="window.location.href='../assignment2/?admin/addItem'"><i class="fas fa-plus-circle">&nbsp;Add New Item</i></button>
        <br>
 
        <?php
                 for($i = 0;$i < count($items);$i++){
                    print "<br>";
                    print "<div class='wrapper'>";
                    print "<figure class='photo'>";
                    print "<img src='".$items[$i][5]."' alt='Picture Unavailable'>";    
                    print "</figure>";
                    print "<div class='itemContent'>";
                    print "<h4>".$items[$i][1]."</h4>";
                    print "<p>".$items[$i][2]."</p>";
                    print "<span><i class='fas fa-shopping-cart'>&nbsp;".$items[$i][3]."</i></span></div></div>";
                    print "<button onclick='confirm()' class='btn btn-danger btn-sm float-right'><i class='fas fa-trash'>&nbsp;Delete</i></button>";
                    $location = "window.location.href='../assignment2/?admin/modifyItem/".$items[$i][0]."'";
                    print "<button class='float-right btn btn-primary btn-sm'><i class='fas fa-edit' onclick=$location>&nbsp;Modify</i></button><br><br><hr>";
                 }
            
            ?>
        <br>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

        <br><br><br>
    </div>
</div>
<?php
include 'app/view/copyright.php';
?>