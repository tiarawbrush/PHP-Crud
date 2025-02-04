<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap data siswa</title>
</head>
<body>
    <h1>RECAP DATA</h1>
    <table border="1">
      <tr>
        <th>NIS</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>TAHUN</th>
        <th>ACTION</th>
      </tr>
      <?php
      include ("koneksi.php");
      $tampil = mysqli_query($koneksi, "select * from biodata");
      while ($data = mysqli_fetch_array(($tampil))){
        ?>
      <tr>
        <td><?php echo $data['NIS'];?></td>
        <td><?php echo $data['Nama'];?></td>
        <td><?php echo $data['Kelas'];?></td>
        <td><?php echo $data['Tahun'];?></td>
        <td>edit | hapus</td>
      </tr>
      <?php
      }
      ?>
    </table>
</body>
</html>
