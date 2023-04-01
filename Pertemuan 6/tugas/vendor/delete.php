<?php
require_once 'dbkoneksi.php';

// menangkap data iddel dari url
$id = $_GET['iddel'];

$sql = "DELETE FROM vendor WHERE id = $id";
$dbh->query($sql);

header('location: vendor.php');