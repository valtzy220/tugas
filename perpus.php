<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Peminjaman Buku</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h2>Form untuk buku</h2>
    <form action="script(1).php" method="POST">
        <label for="tanggal" >Tanggal Peminjaman:</label></br>
        <input type="text" name="tanggal" id="tanggal"></br></br>
        <label for="Nama" >Nama Siswa:</label></br>
        <input type="text" name="Nama"></br></br>
        <label for="kelas" >Masukan kelas:</label></br>
        <input type="text" name="kelas" id="kelas"></br></br>
        <label for="Judul" >Judul buku:</label></br>
        <input type="text" name="Judul" id="Judul"></br></br>
        <label for="Jumlah" >Jumlah Buku yang dipinjam:</label></br>
        <input type="text" name="Jumlah" id="Jumlah"></br></br>
        <button type="submit"><b>SUBMIT</b></button>
    </form>
    <footer>&copy Valnihbos</footer>
</body>
</html>