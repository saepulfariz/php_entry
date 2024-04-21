<?php

include 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = " . $id);
$data = mysqli_fetch_assoc($result);

// jika tombol submit di klik 
if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $sql = "UPDATE `mahasiswa` SET `npm`='" . $npm . "',`nama`='" . $nama . "',`jenis_kelamin`='" . $jenis_kelamin . "',`alamat`='" . $alamat . "' WHERE id = " . $id;
    // execute sql lewat php
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Data berhasil di edit');window.location.href= 'index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Data Gagal di edit');window.location.href= 'index.php';</script>";
        exit;
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
    <h1>EDIT DATA</h1>
    <br>
    <form action="" method="post">
        <label for="npm">NPM</label>
        <input type="text" name="npm" id="npm" value="<?= $data['npm']; ?>">
        <br>
        <br>
        <label for="nama">NAMA</label>
        <input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>">
        <br>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <!-- jika yang di database laki-laki maka select yang laki-laki  -->
            <option <?= ($data['jenis_kelamin'] == "Laki-Laki") ? 'selected' : ''; ?>>Laki-Laki</option>
            <option <?= ($data['jenis_kelamin'] == "Perempuan") ? 'selected' : ''; ?>>Perempuan</option>
        </select>
        <br>
        <br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" cols="30" rows="5"><?= $data['alamat']; ?></textarea>
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
        <a href="index.php">Batal</a>

    </form>
</body>

</html>