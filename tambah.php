<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 40px;
}

/* Judul */
h2 {
    margin-bottom: 20px;
}

/* Form container */
form {
    background-color: #eaeaea;
    padding: 25px;
    width: 350px;
    border-radius: 5px;
}

/* Input */
input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: none;
    border-bottom: 1px solid #999;
    background: transparent;
    outline: none;
}

/* Button */
button {
    padding: 10px;
    width: 100%;
    background-color: black;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #333;
}
    </style>
</head>
<body>
    <h2>Tambah pengguna</h2>

    <form method="POST">
    Nama: <br>
    <input type="text" name="nama" required><br>

    Password: <br>
    <input type="text" name="password" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO data_pengguna (nama, password) VALUES ('$nama','$password')");
    header("location:index.php");
}
?>