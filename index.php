<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-brand">📚 e-Perpus</div>
        <ul class="nav-links">
            <li><a href="#buku">Data Buku</a></li>
            <li><a href="#penulis">Penulis</a></li>
            <li><a href="#kategori">Kategori</a></li>
        </ul>
    </nav>

    <header class="page-header">
        <h1>Dashboard Manajemen Perpustakaan</h1>
        <p>Kelola data buku, penulis, dan kategori dengan mudah dan dinamis.</p>
    </header>

    <?php
    require_once 'service/config.php';


    $sqlBuku = "SELECT buku.*, penulis.namaPenulis, kategori.namaKategori FROM buku JOIN penulis ON buku.idPenulis = penulis.id JOIN kategori ON buku.idKategori = kategori.id";
    $sqlPenulis = "SELECT * FROM penulis";
    $sqlKategori = "SELECT * FROM kategori";

    $resultBuku = $conn->query($sqlBuku);
    $resultPenulis = $conn->query($sqlPenulis);
    $resultKategori = $conn->query($sqlKategori);
    ?>

    <main class="container">
        
        <section class="card" id="buku">
            <div class="card-header">
                <h2>Daftar Buku di Perpustakaan</h2>
            </div>
            <div class="table-responsive">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Buku</th>
                            <th>Tahun Terbit</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $resultBuku->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['judulBuku'] ?></td>
                                <td><?= $row['tahunTerbit'] ?></td>
                                <td><?= $row['namaPenulis'] ?></td>
                                <td><?= $row['namaKategori'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>

        <div class="grid-two">
            <section class="card" id="penulis">
                <div class="card-header">
                    <h2>Data Penulis</h2>
                </div>
                <div class="table-responsive">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Penulis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $resultPenulis->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['namaPenulis'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="card" id="kategori">
                <div class="card-header">
                    <h2>Kategori Buku</h2>
                </div>
                <div class="table-responsive">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $resultKategori->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['namaKategori']?></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

    </main>
</body>

</html>