<?php
include("koneksi.php");
$NIS=$_POST['NIS'];
$Nama=$_POST['Nama'];
$Kelas=$_POST['Kelas'];
$Tahun=$_POST['Tahun'];
$tambah= mysqli_query ($koneksi, "insert into biodata values ('$NIS', '$Nama', '$Kelas', '$Tahun')");

if($tambah){
    echo "<script> alert ('Data Berhasil Disimpan') </script>";
    header('location:tampilan.php');
}else{
    echo "Data Gagal Disimpan";
}

?>
