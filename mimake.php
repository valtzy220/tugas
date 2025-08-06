<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluar masuk barang</title>
</head>
<body>
    <form action="script(2).php" method="POST">
        <h2>Data Barang</h2>
        <label for="tanggal" name="tanggal">Tanggal</label></br>
        <select name="tanggal" id="tanggal">

        <option value="1 agustus 2025" id="1 agustus 2025"> 1 agustus 2025</option>
        <option value="2 agustus 2025" id="2 agustus 2025"> 2 agustus 2025</option>
        <option value="3 agustus 2025" id="3 agustus 2025"> 3 agustus 2025</option>
        <option value="4 agustus 2025" id="4 agustus 2025"> 4 agustus 2025</option>
        <option value="5 agustus 2025" id="5 agustus 2025"> 5 agustus 2025</option>
        <option value="6 agustus 2025" id="6 agustus 2025"> 6 agustus 2025</option>
        <option value="7 agustus 2025" id="7 agustus 2025"> 7 agustus 2025</option>
        </select></br></br>
        <label for="Barang" name="Barang">Nama Barang:</label></br>
        <input type="text" name="Barang" id="Barang"></br></br>
        <label for="jumlah" name="jumlah">Jumlah Barang:</label></br>
        <input type="text" name="jumlah" id="jumlah"></br></br>
        <button type="submit">Input</button>
    </form>
</body>
</html>