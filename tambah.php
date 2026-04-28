<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <form method="post">
        nama:<input  type="text" name="nama" require><br><br>
        password:<input type="password" name="password" require><br><br>

        <button type="submit" name="simpan">simpan</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn, "INSERT INTO data_pengguna (nama,`password`) VALUES (
    '$_POST[nama]',
    '$_POST[password]'
    )");
}
?>