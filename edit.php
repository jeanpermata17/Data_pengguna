<?php 
    include 'koneksi.php';
    $id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM data_pengguna WHERE id='$id'");
$item = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data pengguna</title>
</head>
<body>
     <h1>ubah data_pengguna</h1>
    <form method="post">
        nama: <input type="text" name="nama" value="<?= $item['nama']; ?>"><br><br>
        password: <input type="text" name="password"  value="<?= $item['password']; ?>"><br><br>
        <button type="submit" name="update">update</button>
  </form>
</body>
</html>

<?php
if(isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE data_pengguna SET 
    nama='$_POST[nama]',
    `password`='$_POST[password]'
    WHERE id='$id' 
    ");
    
    header("location: index.php");
}
?> 