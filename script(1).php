<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tanggal = $_POST['tanggal'];
    $Nama = $_POST['Nama'];
    $kelas = $_POST['kelas'];
    $Judul = $_POST['Judul'];
    $Jumlah = $_POST['Jumlah'];


   
    echo "<h2>Data pinjaman buka<h/h2></br></br>";
    echo "
    <p>=====================================</br>
    Tanggal pinjam: $tanggal</br></br>
    Nama Siswa: $Nama</br></br>
    kelas: $kelas</br></br>
    Judul Buku: $Judul</br></br>
    Jumlah Buku: $Jumlah</br></br>
    =====================================</br>
    </p>
    ";
} 
else {
    echo "<p>Mohon isi form di atas</p>";
}

?>
<html>
    <link rel="stylesheet" href="coba.css">
</html>