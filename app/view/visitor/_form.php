
<div id="formWrapper" class="container-fluid justify-content-center text-center">
    <div id="loginForm" class="container justify-content-center text-center">
        <form action="../assignment2/?visitor/login" method="post">
            <div class="form-group row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label for="username" class="col-sm-4 col-form-label float-right">Username</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputUsername" placeholder="Enter Username" name="username">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
            </div>
            <div class="form-group row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="inputPassword" class="col-sm-4 col-form-label float-right">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter Password" name="password">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-block" type="submit" name="submit" value="login">Login</button>
            <spam>USERNAME-PASSWORD:<br>1. admin1-password1<br>2. saloni-saloni<br>3. vatsal-bhimani<br>4. admin-Admin@123 <br>5.team-deltaforce</spam>
        </form>
    </div>
</div>