<?php
if($_POST){
    $jenis=$_POST['jenis_paket'];
    $harga=$_POST['harga'];
    
    if(empty($jenis)){
        echo "<script>alert('jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
 
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (jenis_paket, harga) value ('".$jenis."','".$harga."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sip!! Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Yahh Gagal menambahkan paket nih');location.href='tambah_paket.php';</script>";
        }
    }
}
?>