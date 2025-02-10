<?php 
include "koneksi.php";
$NIS=$_POST['NIS'];
$Nama=$_POST['Nama'];
$Kelas=$_POST['Kelas'];
$Tahun=$_POST['Tahun'];
$update= mysqli_query ($koneksi, "update biodata set Nama='$Nama', Kelas='$Kelas', Tahun='$Tahun' where NIS='$NIS'");

if($update){
    echo "<script>alert('Data Berhasil DiUpdate') </script>";
    header('location:tampilan.php');
}else{
    echo "Data Gagal DiUpdate";
}

?>
