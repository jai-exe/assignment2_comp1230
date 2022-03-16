<br>
    <div class="container-fluid">
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
            <h4>Items</h4>
           
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
                    print "<span><i class='fas fa-shopping-cart'>&nbsp;".$items[$i][3]."</i></span></div></div><br><hr>";
                 }
            
            ?>
            <br><br>
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
        </div>
    </div>

 
