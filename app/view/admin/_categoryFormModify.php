
<br>
 <div id="items" class="container-fluid float-right">
        <h4>Modify <?=$extra?></h4>
        <form method="post">

            <div class="form-group row">
                <label for="ctitle" class="col-lg-2 col-form-label">Title</label>
                <div class="col-lg-10">
                    <input type="text" name="ctitle" id="ctitle" placeholder="Title" required maxlength="100">
                    <span class="badge badge-warning">max length: 100</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="cdescription" class="col-lg-2 col-form-label">Description</label>
                <div class="col-lg-10">
                    <textarea name="cdescription" id="cdescription" cols="50" rows="5" maxlength="255" required></textarea>
                    <span class="badge badge-warning">max length: 255</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-form-label col-lg-2">Status</label>
                <div class="col-lg-10">
                <input type="radio" id="show" name="cstatus" value="SHOW">
                        <label for="show">Show</label>
                <input type="radio" id="hide" name="cstatus" value="HIDE">
                        <label for="hide">Hide</label><br>
                </div>
            </div>            

            <div id="buttons" class="container">
                <br>
                <button value="modify" name="csubmit" class="btn btn-primary">Save Changes</button>
                <button value="cancel" name="cancel" class="btn btn-secondary">Cancel</button>
            </div>
        </form>

    </div>
</div>
