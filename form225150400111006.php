<?php

// Deklarasi variabel untuk menyimpan data input
$nim = "";
$nama = "";
$jenisKelamin = "";
$prodi = "";

// Menangani data yang dikirimkan dari form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nim = $_POST["nim"];
  $nama = $_POST["nama"];
  $jenisKelamin = $_POST["jenisKelamin"];
  $prodi = $_POST["prodi"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Input dan Tampilan Data</title>
</head>
<body>
  <h1>Form Input Data</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nim">NIM:</label>
    <input type="text" name="nim" id="nim" value="<?php echo $nim; ?>">
    <br>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
    <br>
    <br>
    <label for="jenisKelamin">Jenis Kelamin:</label>
    <br>
    <input type="radio" name="jenisKelamin" id="laki-laki" value="Laki-laki" <?php if ($jenisKelamin === "Laki-laki") echo "checked"; ?>>
    <label for="laki-laki">Laki-laki</label>
    <br>
    <input type="radio" name="jenisKelamin" id="perempuan" value="Perempuan" <?php if ($jenisKelamin === "Perempuan") echo "checked"; ?>>
    <label for="perempuan">Perempuan</label>
    <br>
    <br>
    <label for="prodi">Prodi:</label>
    <select name="prodi" id="prodi">
      <option value="">-- Pilih Prodi --</option>
      <option value="Teknik Informatika" <?php if ($prodi === "Teknik Informatika") echo "selected"; ?>>Teknik Informatika</option>
      <option value="Sistem Informasi" <?php if ($prodi === "Sistem Informasi") echo "selected"; ?>>Sistem Informasi</option>
      <option value="Manajemen Informatika" <?php if ($prodi === "Manajemen Informatika") echo "selected"; ?>>Manajemen Informatika</option>
    </select>
    <br>
    <br>
    <button type="submit">Submit</button>
  </form>

  <?php if ($nim && $nama && $jenisKelamin && $prodi) : ?>
    <h2>Data yang Dikirimkan</h2>
    <ul>
      <li>NIM: <?php echo $nim; ?></li>
      <li>Nama: <?php echo $nama; ?></li>
      <li>Jenis Kelamin: <?php echo $jenisKelamin; ?></li>
      <li>Prodi: <?php echo $prodi; ?></li>
    </ul>
  <?php endif; ?>
</body>
</html>