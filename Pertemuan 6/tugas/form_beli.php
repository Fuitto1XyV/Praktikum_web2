<!-- INI ADALAH FILE CREATE.PHP -->
<?php
require_once 'dbkoneksi.php';
?>

<form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="id" class="col-4 col-form-label">id</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="id" name="id" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nomor" class="col-4 col-form-label">nomor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="produk" class="col-4 col-form-label">produk</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="produk" name="produk" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="produk_id" class="col-4 col-form-label">Produk id</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="produk_id" name="produk_id" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="jumlah" name="jumlah" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="harga" name="harga" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="vendor_id" class="col-4 col-form-label">vendor id</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="vendor_id" name="vendor_id" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>