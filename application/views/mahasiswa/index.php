<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li><?= $mhs['nama']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html> 