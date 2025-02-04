<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input data</title>
</head>
<body>
    <h1>FORM INPUT DATA SISWA</h1>
    <table border="0">
        <form action="simpan.php" method="post" name="F_Biodata">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="NIS" size="4"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" size="35"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="Kelas" size="10"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="number" name="Tahun"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN" name="simpan">
                                <input type="reset" value="BATAL" name="batal"></td>
            </tr>

        </form>

    </table>
</body>
</html>
