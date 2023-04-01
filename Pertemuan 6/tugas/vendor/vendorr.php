<!-- INI ADALAH FILE INDEX.PHP -->
<?php
require_once 'dbkoneksi.php';
?>

<?php
$sql = "SELECT * FROM vendor";

$rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_beli.php" role="button">Tambah Perusahaan</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>id</th>
            <th>nomor</th>
            <th>nama</th>
            <th>kota</th>
            <th>kontak</th>
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
                <td><?= $row['nomor'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row ['kota']?></td>
                <td><?= $row ['kontak']?></td>
                <td>
                    <a class="btn btn-primary" href="view_produk.php?id=<?= $row['id'] ?>">lihat Barang</a>
                    <a class="btn btn-primary" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="delete.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['id'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>