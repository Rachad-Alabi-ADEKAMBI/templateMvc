<nav class="navbar navbar-expand-lg navbar-light bg-light mb-0">
    <a class="navbar-brand" href="#">
        <img src="./public/img/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="./index.php?action=home#about">About</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="./index.php?action=home#contact">Contact</a>
            </li>


            <?php if (isset($_SESSION['user'])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?action=dashboard">
                    Dashboard
                </a>
            </li>
            <?php } ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <?php if (!isset($_SESSION['user'])) { ?>

            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                <a href="./index.php?action=login">
                    Login
                </a>
            </button>
            <?php } else { ?>
            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                <a href="./api/api.php?action=logout">
                    Logout
                </a>
            </button>
            <?php } ?>
        </form>
    </div>
</nav>