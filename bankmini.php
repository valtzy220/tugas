<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bank mini</title>
</head>
<body>
    <form action="script(3).php" method="POST">
        <h2>Layanan Loket Bank Mini</h2>
        <label for="nama">Nama Nasabah:</label></br>
        <input type="text" name="nama"id="nama"></br></br>
        <label for="nomorbank">Nomor Bank:</label></br>
        <input type="text" name="nomorbank" id="nomorbank"></br></br>
        <label for="layanan">Jenis layanan:</label></br>
        <select name="layanan" id="layanan">
            <option value="Setoran Tunai">Setoran Tunai</option>
            <option value="Penarikan Tunai">Penarikan Tunai</option>
            <option value="Buka Rekening">Buka Rekening</option>
            <option value="Transfer">Transfer</option>

        </select></br></br>
        <label for="jumlah">Jumlah Transaksi (RP):</label></br>
        <input type="number" name="jumlah" id="jumlah" required></br></br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>