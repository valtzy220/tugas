<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $layanan = $_POST['layanan'];
    $jumlah = $_POST['jumlah'];

    // Cek apakah file nomor antrian ada
    $file = 'nomor.txt';

    if (!file_exists($file)) {
        file_put_contents($file, 0); // inisialisasi jika belum ada
    }

    // Ambil nomor terakhir dan tambah 1
    $nomor_terakhir = (int)file_get_contents($file);
    $nomor_baru = $nomor_terakhir + 1;
    file_put_contents($file, $nomor_baru);

    // Format nomor loket (misal: A001)
    $format_nomor = 'A' . str_pad($nomor_baru, 3, '0', STR_PAD_LEFT);

    // Tampilkan hasil
    echo "<h2>Nomor Antrian Anda</h2>";
    echo "Nomor Loket: <strong>$format_nomor</strong><br><br>";

    echo "<h3>Nota Bank Mini</h3>";
    echo "Nama Nasabah: $nama<br>";
    echo "Jenis Layanan: $layanan<br>";
    echo "Jumlah Transaksi: Rp " . number_format($jumlah, 0, ',', '.') . "<br><br>";

    echo "<a href='form_loket.php'>Kembali ke Form</a>";
} else {
    echo "Silakan isi form terlebih dahulu.";
}
?>
