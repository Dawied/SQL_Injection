<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Our Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articles.php">Artikelen</a>
                </li>
            </ul>
            <!--
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            -->
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <?php if(!isset($_SESSION)) { session_start(); } ?>

                    <?php if (empty($_SESSION["username"])): ?>
                        <a class="nav-link" href="loginform.php">Login</a>
                    <?php else: ?>
                        <a class="nav-link" href="logout.php">Logout</a>
                    <?php endif; ?>

                </li>
            </ul>
        </div>
    </div>
</nav>
