<!-- INI ADALAH FILE INDEX.PHP -->
<?php
require_once 'dbkoneksi.php';
?>

<?php
$sql = "SELECT * FROM pembelian";

$rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_beli.php" role="button">Tambah Barang</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>id</th>
            <th>tanggal</th>
            <th>nomor</th>
            <th>produk id</th>
            <th>jumlah</th>
            <th>harga</th>
            <th>vendor id</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['id'] ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['nomor'] ?></td>
                <td><?= $row['produk_id'] ?></td>
                <td><?= $row ['jumlah']?></td>
                <td><?= $row ['harga']?></td>
                <td><?= $row ['vendor_id']?></td>
                <td>
                    <a class="btn btn-primary" href="view_produk.php?id=<?= $row['id'] ?>">lihat Barang</a>
                    <a class="btn btn-primary" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['id'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>