<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'service/config.php';

    $sqlBuku = "SELECT buku.*, penulis.namaPenulis, kategori.namaKategori FROM buku JOIN penulis ON buku.idPenulis = penulis.id JOIN kategori ON buku.idKategori = kategori.id";
    $sqlPenulis = "SELECT * FROM penulis";
    $sqlKategori = "SELECT * FROM kategori";

    $resultBuku = $conn->query($sqlBuku);
    $resultPenulis = $conn->query($sqlPenulis);
    $resultKategori = $conn->query($sqlKategori);
    ?>
    <table border='1' cellpadding='8'>
        <tr>
            <th colspan='5'>BUKU DI PERPUSTAKAAN</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>ID Penulis</th>
            <th>ID Kategori</th>
        </tr>
        <?php while ($row = $resultBuku->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['judulBuku'] ?></td>
                <td><?= $row['tahunTerbit'] ?></td>
                <td><?= $row['namaPenulis'] ?></td>
                <td><?= $row['namaKategori'] ?></td>
            </tr>
        <?php } ?>
    </table>
    
    <table border="1" cellpadding="8">
        <tr>
            <th colspan='2'>Nama Penulis</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nama Penulis</th>
            
        </tr>
        <?php while ($row = $resultPenulis->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['namaPenulis'] ?></td>
            </tr>
        <?php } ?>
       
    </table>
    <table border="1" cellpadding="8">
        <tr>
            <th colspan='2'>Kategori Buku</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
        </tr>
        <?php while ($row = $resultKategori->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['namaKategori']?></td>
        </tr>
        <?php }?>
    </table>
</body>

</html>