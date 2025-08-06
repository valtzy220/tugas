<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tanggal = $_POST['tanggal'];
    $Burung = $_POST['Barang'];
    $jumlah = $_POST['jumlah'];

    echo "<h2>Barang Keluar</h2>";
    echo "Tanggal: $tanggal<br>";
    echo "Nama Barang: $Burung<br>";
    echo "Jumlah: $jumlah pcs<br>";
} 
else {
    echo "Mohon isi form di atas";
}
?>
