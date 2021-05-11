<?php include("./core/connection.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/favicon/favicon.ico">

    <title>Kehutanan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="./css-js/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css-js/css/carousel.css" rel="stylesheet">

    <!-- Data table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="./index.php">Kehutanan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php if (!empty($_SESSION['id_user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./kategori.php">Kategori Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./data_barang.php">Data Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./laporan_barang.php">Laporan Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./core/process.php?action=logout">Log out</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Login</a>
                        </li>
                    <?php } ?>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    <span id="date_template" style="color: white;"></span> <span id="clock_template" style="color: white;"></span>
                </form>
            </div>
        </nav>
    </header>
    <main role="main">