
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

    <div id="items" class="container-fluid float-right">
        <h4>Modify <?=$extra?></h4>
        <form method="post">

            <div class="form-group row">
                <label for="title" class="col-lg-2 col-form-label">Title</label>
                <div class="col-lg-10">
                    <input type="text" name="title" id="title" placeholder="Title" maxlength="100" required>
                    <span class="badge badge-warning">max length: 100</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-lg-2 col-form-label">Description</label>
                <div class="col-lg-10">
                    <textarea name="description" id="description" cols="50" rows="5" maxlength="255" required></textarea>
                    <span class="badge badge-warning">max length: 255</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="category" class="col-lg-2 col-form-label">Category</label>
                <div class="col-lg-10">
                    <select name="category" id="category" required>
                    <?php foreach($categories as $cat){
                            print "<option value='$cat[0]'>$cat[1]</option>";
                        }
                        ?>
                    </select>
                    <span class="badge badge-warning">Select a category</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-form-label col-lg-2">Status</label>
                <div class="col-lg-10">
                <input type="radio" id="show" name="status" value="SHOW">
                        <label for="show">Show</label>
                <input type="radio" id="hide" name="status" value="HIDE">
                        <label for="hide">Hide</label><br>
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-form-label col-lg-2">Price</label>
                <div class="col-lg-10">
                    <input type="text" name="price" id="price" placeholder="Price" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="picture" class="col-form-label col-lg-2">Picture</label>
                <div class="col-lg-10">
                    <input type="file" name="picture" id="picture" accept="image/*">
                </div>
            </div>

            <div id="buttons" class="container">
                <br>
                <button value="modify" name="submit" class="btn btn-primary">Save Changes</button>
                <button value="cancel" name="cancel" class="btn btn-secondary">Cancel</button>
            </div>
        </form>

    </div>
</div>
