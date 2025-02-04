<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI</title>
</head>
<body>
    <h1>FORM INPUT NILAI</h1>
    <table>
    <form action="simpan_nilai.php" method="post" name="F_Nilai">
                <tr>
                <td>NIS</td>
                <td><select name="NIS">
                <?php
                  include ("koneksi.php");
                  $tampil = mysqli_query($koneksi, "select * from biodata");
                  while ($data = mysqli_fetch_array(($tampil))){
                ?>
                    <option value="<?php echo $data['NIS']?>"><?php echo $data['NIS']?>c</option>
                    <?php }?>
                </select></td>
                </tr>
                <tr>
                <td>Nilai</td>
                <td><input type="number" name="Nilai"></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" value="SIMPAN" name="simpan">
                                <input type="reset" value="BATAL" name="batal"></td>
                </tr>

    </form>
    </table>
</body>
</html>
