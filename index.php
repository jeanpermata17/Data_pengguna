<?php
  include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data pengguna seseorang</h1>
    <a href="tambah.php">+ Tambah Data</a>

    <table class="data">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>password</th>
            <th>aksi</th>
        </tr>

<?php
$data = mysqli_query($conn,"SELECT * FROM data_pengguna");
while($item = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $item['id'];?></td>
    <td><?= $item['nama'];?></td>
    <td><?= $item['password'];?></td>
    <td>
        <a href="hapus.php?id=<?= $item['id'];?>" class="hapus">Hapus</a>
        <a href="edit.php?id=<?=$item['id'];?>" class="edit">edit</a>
    </td>
</tr>
<?php } ?>


    </table>
</body>
</html>