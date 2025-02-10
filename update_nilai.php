<?php 
include "koneksi.php";
// $NIS=$_POST['NIS'];
$id_nilai=$_POST['id_nilai'];
$Nilai=$_POST['Nilai'];
$update_nilai= mysqli_query ($koneksi, "update nilai set Nilai='$Nilai' where id_nilai='$id_nilai'");

if($update_nilai){
    echo "<script>alert('Data Berhasil DiUpdate') </script>";
    header('location:tampilan_nilai.php');
}else{
    echo "Data Gagal DiUpdate";
}

?>
