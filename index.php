<?php
require_once './controller.php';
?>
<!doctype html>
<html lang="pt-br">
    <head >
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

        <!--Fonts-->
        <link rel="stylesheet" href="./system/fonts/fontawesome-free-5.9.0-web/css/fontawesome.min.css">
        <link rel="stylesheet" href="./system/fonts/fontawesome-free-5.9.0-web/css/all.min.css">
        <link rel="stylesheet" href="system/css/newcss.css/">

        <title>Hotel MB</title>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=cliente&subp=cliente">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=funcionario&subp=funcionario">Funcionário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=aposento&subp=aposento">Hospedagem</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <!--Bloco de páginas-->
                <div class="col-md-12 layout-page">
                    <?php
                    if (isset($_GET['page']) && isset($_GET['subp'])):
                        require_once "./system/layout/{$_GET['page']}/page" . ucfirst($_GET['page']) . ".php";
                    else :
                        ?>
                        <p>&nbsp;</p>
                        <div class="col-md-2">
                            <div class="card">
                                <a class="btn btn-large btn-success" href="#">
                                    <i class="fa fa-user-friends fa-3x"></i>
                                </a>
                                <div class="card-footer text-center">
                                    <strong>CLIENTE</strong>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <script src="./system/js/jquery-3.3.1.slim.min.js"></script>
        <script src="./bootstrap/js/popper.min.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js" ></script>
        <script src="./system/js/script.js"></script>
    </body>
</html>