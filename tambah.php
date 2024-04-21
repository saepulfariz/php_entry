<?php

include 'koneksi.php';

// jika tombol submit di klik 
if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO `mahasiswa`(`npm`, `nama`, `jenis_kelamin`, `alamat`) VALUES ('" . $npm . "','" . $nama . "','" . $jenis_kelamin . "','" . $alamat . "')";
    // execute sql lewat php
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Data berhasil di tambahkan');window.location.href= 'index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Data Gagal di tambahkan');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST ENTRY</title>
</head>

<body>
    <h1>TAMBAH DATA</h1>
    <br>
    <form action="" method="post">
        <label for="npm">NPM</label>
        <input type="text" name="npm" id="npm">
        <br>
        <br>
        <label for="nama">NAMA</label>
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
        <br>
        <br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
        <a href="index.php">Batal</a>

    </form>
</body>

</html>