<!-- INI ADALAH FILE PROSES.PHP -->
<?php 
require_once 'dbkoneksi.php';
?>

<?php 
   $_id = $_POST['id'];
   $_nomor = $_POST['nomor'];
   $_produk_id = $_POST['nama'];
   $_jumlah = $POST['kota'];
   $_harga = $_POST['kontak'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_nomor;// 3
   $ar_data[]=$nama;
   $ar_data[]=$_kota;
   $ar_data[]=$_kontak;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pembelian (id,nomor,nama,kota,kontak) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET id=?,nomor=?,nama=?,kota=?,kontak=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $is_success = $st->execute($ar_data);
    
    if ($is_success){
        header('location:vendorr.php');
   }
   }

   echo "Proses Gagal";
?>