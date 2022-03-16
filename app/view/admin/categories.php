
<div class="container-fluid">
        <h4>Categories</h4>
        <button class="btn btn-primary float-right" name="addCategory" onclick="window.location.href='../assignment2/?admin/addCategory'"><i class="fas fa-plus-circle">&nbsp;Add New Category</i></button>
    <br>
    <br>
<!--<h3>Categories</h3>-->
<table id="catList">

    <tr class="catCol">
        <th>Name</th>
        <th>Description</th>
        <th>Number of Items</th>
        <th>Action</th>
    </tr>
<!--    <tr>
        <td>Ben Blanc</td>
        <td>20</td>
        <td>123 Main Street</td>
        <td><a href="/comp1230/wk5/?profile/edit/1">edit</a></td>
    </tr>
    <tr>
        <td>Jon Snow</td>
        <td>30</td>
        <td>160 Kendal Av</td>
        <td><a href="/comp1230/wk5/?profile/edit/2">edit</a></td>
    </tr>
    <tr>
        <td>Mary Phillips</td>
        <td>25</td>
        <td>80 Bloor Street</td>
        <td><a href="/comp1230/wk5/?profile/edit/3">edit</a></td>
    </tr>
-->
<?php /*foreach($names as $name): ?>
    <tr>
        <?php foreach($name as $column): ?>
        <td><?=$column;?></td>
        <?php endforeach;?>
        <td><a href="/comp1230/labs/practice/wk6/?profile/edit/<?=$name[0]?>">edit</a></td>
    </tr>
<?php endforeach;*/?>
<?php
for($i = 0;$i < count($categories);$i++){
    print "<tr class='catCol'>";
    print "<td>".$categories[$i][1]."</td>";
    print "<td>".$categories[$i][2]."</td>";
    print "<td>".$categories[$i][3]."</td>";
    $location = "window.location.href='../assignment2/?admin/modifyCategory/".$categories[$i][0]."'";
    print "<td><button class='float-center btn btn-primary'><i class='fas fa-edit' onclick=$location>&nbsp;Modify</i></button></td>";
    print "</tr>";
}
?>
</table>
</div>


