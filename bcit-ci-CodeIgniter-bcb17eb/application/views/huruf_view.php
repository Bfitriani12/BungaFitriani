<!DOCTYPE html>
<html>
<head>
    <title>Pengenalan Huruf Hijaiyah</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; }
        .container { width: 90%; margin: 30px auto; }
        h2 { text-align: center; margin-bottom: 30px; }
        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .huruf-card { background: #fff; border-radius: 8px; box-shadow: 0 0 8px #ccc; padding: 20px; text-align: center; }
        .huruf-utama { font-size: 2.5em; margin-bottom: 10px; }
        .huruf-latin { font-size: 1.2em; color: #555; margin-bottom: 10px; }
        .huruf-deskripsi { font-size: 0.95em; color: #888; margin-bottom: 15px; }
        .btn-detail { padding: 8px 18px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        .btn-detail:hover { background: #0056b3; }
        @media (max-width: 800px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 500px) {
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pengenalan Huruf Hijaiyah</h2>
        <div class="grid">
            <?php foreach($huruf as $h): ?>
            <div class="huruf-card">
                <div class="huruf-utama"><?php echo $h['Huruf_1']; ?></div>
                <div class="huruf-latin"><?php echo $h['Huruf_2']; ?></div>
                <div class="huruf-deskripsi"><?php echo $h['Deskripsi']; ?></div>
                <button class="btn-detail">Detail</button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 