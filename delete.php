<?php

include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM `mahasiswa` WHERE id = " . $id;
// execute sql lewat php
$res = mysqli_query($conn, $sql);
if ($res) {
    echo "<script>alert('Data berhasil di delete');window.location.href= 'index.php';</script>";
    exit;
} else {
    echo "<script>alert('Data Gagal di delete');window.location.href= 'index.php';</script>";
    exit;
}
