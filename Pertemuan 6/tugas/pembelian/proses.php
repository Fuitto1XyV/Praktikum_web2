<!-- INI ADALAH FILE PROSES.PHP -->
<?php 
require_once 'dbkoneksi.php';
?>

<?php 
   $_id = $_POST['id'];
   $_tanggal = $_POST['tanggal'];
   $_nomor = $_POST['nomor'];
   $_produk_id = $_POST['produk_id'];
   $_jumlah = $POST['jumlah'];
   $_harga = $_POST['harga'];
   $_vendor_id = $_POST['vendor_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_tanggal; // ? 2
   $ar_data[]=$_nomor;// 3
   $ar_data[]=$_produk_id;
   $ar_data[]=$_jumlah;
   $ar_data[]=$_harga;
   $ar_data[]=$_vendor_id;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pembelian (id,tanggal,nomor,produk_id,jumlah,harga,vendor_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET id=?,tanggal=?,nomor=?,produk_id=?,jumlah_id=?,harga_id=?,vendor_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $is_success = $st->execute($ar_data);
    
    if ($is_success){
        header('location:tambel_pembelian.php');
   }
   }

   echo "Proses Gagal";
?>