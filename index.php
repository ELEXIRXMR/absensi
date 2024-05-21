<?php
include 'koneksi.php';

$queryMahasiswa = "SELECT * FROM mahasiswa";
$resultMahasiswa = mysqli_query($koneksi, $queryMahasiswa);

$queryMatakuliah = "SELECT * FROM matakuliah";
$resultMatakuliah = mysqli_query($koneksi, $queryMatakuliah);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Absensi Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Aplikasi Absensi Mahasiswa</h1>

    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($rowMahasiswa = mysqli_fetch_assoc($resultMahasiswa)): ?>
                <tr>
                    <td><?php echo $rowMahasiswa['nim']; ?></td>
                    <td><?php echo $rowMahasiswa['nama_mahasiswa']; ?></td>
                    <td><?php echo $rowMahasiswa['jurusan']; ?></td>
                    <td><a href="absensi.php?id_mahasiswa=<?php echo $rowMahasiswa['id_mahasiswa']; ?>">Absen</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <h2>Daftar Matakuliah</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($rowMatakuliah = mysqli_fetch_assoc($resultMatakuliah)): ?>
                <tr>
                    <td><?php echo $rowMatakuliah['kode_matakuliah']; ?></td>
                    <td><?php echo $rowMatakuliah['nama_matakuliah']; ?></td>
                    <td><?php echo $rowMatakuliah['sks']; ?></td>
                    <td><a href="absensi.php?id_matakuliah=<?php echo $rowMatakuliah['id_matakuliah']; ?>">Absen</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
