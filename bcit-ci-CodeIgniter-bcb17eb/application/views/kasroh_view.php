<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: #38bdf8;
            color: #fff;
            padding: 25px 0;
            text-align: center;
            font-size: 2.2em;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #bae6fd;
        }
        .container {
            width: 90%;
            margin: 30px auto;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 20px;
            justify-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        .huruf-link {
            text-decoration: none;
        }
        .huruf-card {
            width: 120px;
            height: 180px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border: 4px solid #fff;
            position: relative;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        .huruf-card:hover {
            transform: scale(1.05) translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            border-color: #38bdf8;
        }
        .huruf-card .kasroh-strip {
            width: 32px;
            height: 8px;
            background: transparent;
            position: absolute;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%) rotate(12deg);
            z-index: 2;
        }
        .huruf-card .kasroh-strip::before {
            content: '';
            display: block;
            width: 28px;
            height: 4px;
            background: #2563eb;
            border-radius: 2px;
            margin: 0 auto;
        }
        .huruf-utama {
            font-size: 2.5em;
            color: #333;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            margin-bottom: 10px;
            margin-top: 38px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .huruf-latin {
            font-size: 1.1em;
            color: #fff;
            font-weight: bold;
            background: linear-gradient(45deg, #38bdf8, #2563eb);
            border-radius: 15px;
            padding: 5px 15px;
            margin-top: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        .huruf-name {
            font-size: 0.9em;
            color: #666;
            margin-top: 5px;
            text-align: center;
        }
        /* Warna kartu berbeda */
        .warna-1 { background: #e0e7ff; }
        .warna-2 { background: #bae6fd; }
        .warna-3 { background: #a5b4fc; }
        .warna-4 { background: #818cf8; }
        .warna-5 { background: #f9a8d4; }
        .warna-6 { background: #fcd34d; }
        .warna-7 { background: #fbbf24; }
        .warna-8 { background: #f87171; }
        .warna-9 { background: #6ee7b7; }
        .warna-10 { background: #f472b6; }
        .warna-11 { background: #facc15; }
        .warna-12 { background: #fdba74; }
        .warna-13 { background: #34d399; }
        .warna-14 { background: #a3e635; }
        .warna-15 { background: #f472b6; }
        .warna-16 { background: #fbbf24; }
        .warna-17 { background: #a78bfa; }
        .warna-18 { background: #f87171; }
        .warna-19 { background: #fbbf24; }
        .warna-20 { background: #f472b6; }
        .warna-21 { background: #a3e635; }
        .warna-22 { background: #f87171; }
        .warna-23 { background: #fbbf24; }
        .warna-24 { background: #a78bfa; }
        .warna-25 { background: #f472b6; }
        .warna-26 { background: #a3e635; }
        .warna-27 { background: #f87171; }
        .warna-28 { background: #fbbf24; }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Kasroh - Huruf Hijaiyah</div>
    <div class="container">
        <div class="nav-buttons" style="text-align:center; margin-bottom:30px;">
            <a href="<?php echo site_url('kasroh/quiz'); ?>" class="nav-btn" style="display:inline-block; background:#2563eb; color:white; padding:12px 24px; text-decoration:none; border-radius:8px; margin:0 10px; font-weight:bold;">Quiz Kasroh</a>
            <a href="<?php echo site_url('kasroh/practice'); ?>" class="nav-btn" style="display:inline-block; background:#38bdf8; color:white; padding:12px 24px; text-decoration:none; border-radius:8px; margin:0 10px; font-weight:bold;">Latihan</a>
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn" style="display:inline-block; background:#a259ff; color:white; padding:12px 24px; text-decoration:none; border-radius:8px; margin:0 10px; font-weight:bold;">Dashboard</a>
        </div>
        <div class="grid">
            <?php foreach($huruf_list as $index => $huruf): ?>
            <a class="huruf-link" href="<?php echo site_url('kasroh/detail/' . $huruf['latin']); ?>">
                <div class="huruf-card warna-<?php echo ($index % 28) + 1; ?>">
                    <div class="huruf-utama"><?php echo $huruf['arabic']; ?></div>
                    <div class="kasroh-strip"></div>
                    <div class="huruf-latin"><?php echo $huruf['latin']; ?></div>
                    <div class="huruf-name"><?php echo $huruf['name']; ?></div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 