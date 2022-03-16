<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$view?></title>
    <link rel="stylesheet" href="../assignment2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assignment2/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bab3a3e97f.js" crossorigin="anonymous"></script>

</head>
<body>

<nav id="header-nav" class="navbar navbar-nav navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand mb-0 h1">My Classified</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../assignment2/?visitor/index">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="../assignment2/?visitor/view" class="nav-link">Items</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach($categories as $cat){
                     print "<a class='dropdown-item' href='../assignment2/?visitor/categories/$cat[0]'>$cat[1]</a>";
                     }
                        ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../assignment2/?visitor/search">Search</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../assignment2/?visitor/login" data-target="#myModel" data-toggle="model"><i class="fas fa-sign-in-alt">&nbsp;Login</i></a>
            </li>
        </ul>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

</body>
</html>
