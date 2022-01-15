<?php  //menghubungkan koneksi.php ke semua file php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Administrator</title> 
</head>
<body>
    <script src="bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <div class="container">
    <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>Perpustakaan</h1>
    <p>Abdul Hamid Yasir Alfalah</p>
    </div>
    </div>

    <div class="container"> <!-- container dengan row=baris col=column -->
        <div>
            <div>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><h4>Perpustakaan</h4></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Administrator</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?page=buku">Buku</a> <!--Menuju Form Buku -->
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="?page=anggota">Anggota</a>
                            </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
                </nav>
            </div>
        </div>
    </div>
                <?php
                if (isset($_GET['page'])){ //jika halaman get=page maka ke .php
                     if($_GET['page'] == 'buku'){
                        include('buku.php');
                    }
                }
                ?>
                <?php
                if (isset($_GET['page'])){ //jika halaman get=page maka ke .php
                     if($_GET['page'] == 'anggota'){
                        include('anggota.php');
                    }
                }
                ?>
                <?php
                if (isset($_GET['page'])){ //jika halaman get=page maka ke .php
                     if($_GET['page'] == 'anggota-delete'){
                        include('anggota-delete.php');
                    }
                }
                ?>
                <?php
                if (isset($_GET['page'])){ //jika halaman get=page maka ke .php
                     if($_GET['page'] == 'anggota-insert'){
                        include('anggota-insert.php');
                    }
                }
                ?>
    </div>              
</body>
</html>