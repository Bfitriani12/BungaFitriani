<!DOCTYPE html>
<html>
<head>
    <title>Tanwin Fathah</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; }
        .navbar { background: #007bff; padding: 12px 0; margin-bottom: 30px; }
        .navbar ul { list-style: none; margin: 0; padding: 0; display: flex; justify-content: center; }
        .navbar li { margin: 0 15px; }
        .navbar a { color: #fff; text-decoration: none; font-weight: bold; font-size: 1.1em; padding: 6px 14px; border-radius: 4px; transition: background 0.2s; }
        .navbar a:hover, .navbar .active { background: #0056b3; }
        .container { width: 80%; margin: 40px auto; background: #fff; border-radius: 8px; box-shadow: 0 0 10px #ccc; padding: 30px; }
        h2 { text-align: center; margin-bottom: 30px; }
        .placeholder { text-align: center; color: #888; font-size: 1.2em; }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="<?php echo site_url('huruf'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('fathah'); ?>">Fathah</a></li>
            <li><a href="<?php echo site_url('kasroh'); ?>">Kasroh</a></li>
            <li><a href="<?php echo site_url('dhomah'); ?>">Dhomah</a></li>
            <li><a href="<?php echo site_url('tanwinfathah'); ?>" class="active">Tanwin Fathah</a></li>
            <li><a href="<?php echo site_url('tanwindhomah'); ?>">Tanwin Dhomah</a></li>
            <li><a href="<?php echo site_url('tanwinkasroh'); ?>">Tanwin Kasroh</a></li>
            <li><a href="<?php echo site_url('tajwid'); ?>">Tajwid</a></li>
        </ul>
    </div>
    <div class="container">
        <h2>Halaman Tanwin Fathah</h2>
        <div class="placeholder">Konten Tanwin Fathah akan ditampilkan di sini.</div>
    </div>
</body>
</html> 