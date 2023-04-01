<?php
require_once 'dbkoneksi.php';

// menangkap data iddel dari url
$id = $_GET['iddel'];

$sql = "DELETE FROM pembelian WHERE id = $id";
$dbh->query($sql);

header('location: tambel_pembelian.php');