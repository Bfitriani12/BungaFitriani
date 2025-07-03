<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; margin: 0; }
        .header { background: #007bff; color: #fff; padding: 18px 0; text-align: center; font-size: 1.5em; }
        .main { display: flex; }
        .sidebar { width: 220px; background: #f1f1f1; min-height: 100vh; padding-top: 30px; }
        .sidebar ul { list-style: none; padding: 0; }
        .sidebar li { margin-bottom: 18px; }
        .sidebar a { color: #333; text-decoration: none; font-weight: bold; padding: 10px 24px; display: block; border-radius: 4px; transition: background 0.2s; }
        .sidebar a:hover, .sidebar .active { background: #007bff; color: #fff; }
        .content { flex: 1; padding: 40px; }
        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .huruf-card { background: #fff; border-radius: 8px; box-shadow: 0 0 8px #ccc; padding: 24px; text-align: center; }
        .huruf-utama { font-size: 2.5em; margin-bottom: 10px; }
        .huruf-latin { font-size: 1.2em; color: #555; margin-bottom: 10px; }
        .huruf-deskripsi { font-size: 0.95em; color: #888; margin-bottom: 15px; }
        .btn-detail { padding: 8px 18px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        .btn-detail:hover { background: #0056b3; }
        @media (max-width: 900px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
            .sidebar { width: 120px; }
        }
        @media (max-width: 600px) {
            .main { flex-direction: column; }
            .sidebar { width: 100%; min-height: auto; }
            .content { padding: 20px; }
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="header">Dashboard Pengenalan Huruf Hijaiyah</div>
    <div class="main">
        <div class="sidebar">
            <ul>
                <li><a href="<?php echo site_url('dashboard'); ?>" class="active">Home</a></li>
                <li><a href="<?php echo site_url('fathah'); ?>">Fathah</a></li>
                <li><a href="<?php echo site_url('kasroh'); ?>">Kasroh</a></li>
                <li><a href="<?php echo site_url('dhomah'); ?>">Dhomah</a></li>
                <li><a href="<?php echo site_url('tanwinfathah'); ?>">Tanwin Fathah</a></li>
                <li><a href="<?php echo site_url('tanwindhomah'); ?>">Tanwin Dhomah</a></li>
                <li><a href="<?php echo site_url('tanwinkasroh'); ?>">Tanwin Kasroh</a></li>
                <li><a href="<?php echo site_url('tajwid'); ?>">Tajwid</a></li>
            </ul>
        </div>
        <div class="content">
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
    </div>
</body>
</html> 