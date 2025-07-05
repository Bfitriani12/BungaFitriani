<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #eff6ff 0%, #60a5fa 100%);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: #2563eb;
            color: #fff;
            padding: 25px 0;
            text-align: center;
            font-size: 2.2em;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #60a5fa;
        }
        .container {
            width: 90%;
            margin: 30px auto;
        }
        .nav-buttons {
            text-align: center;
            margin-bottom: 30px;
        }
        .nav-btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            margin: 0 10px;
            font-weight: bold;
        }
        .nav-btn:hover {
            background: #60a5fa;
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
            border-color: #2563eb;
        }
        .huruf-card .tanwinkasroh-strip {
            width: 32px;
            height: 18px;
            position: absolute;
            bottom: 14px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .huruf-card .tanwinkasroh-strip .kasroh1,
        .huruf-card .tanwinkasroh-strip .kasroh2 {
            width: 24px;
            height: 4px;
            background: #2563eb;
            border-radius: 2px;
            margin: 2px 0;
            display: block;
        }
        .huruf-card .tanwinkasroh-strip .kasroh2 {
            margin-top: 4px;
            width: 24px;
            transform: rotate(-10deg);
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
            background: linear-gradient(45deg, #2563eb, #60a5fa);
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
        .warna-1 { background: #eff6ff; }
        .warna-2 { background: #bae6fd; }
        .warna-3 { background: #60a5fa; }
        .warna-4 { background: #2563eb; }
        .warna-5 { background: #a5b4fc; }
        .warna-6 { background: #818cf8; }
        .warna-7 { background: #38bdf8; }
        .warna-8 { background: #f87171; }
        .warna-9 { background: #facc15; }
        .warna-10 { background: #f472b6; }
        .warna-11 { background: #fbbf24; }
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
    <div class="header">Tanwin Kasroh - Huruf Hijaiyah</div>
    <div class="container">
        <div class="nav-buttons">
            <a href="<?php echo site_url('tanwinkasroh/quiz'); ?>" class="nav-btn">Quiz Tanwin Kasroh</a>
            <a href="<?php echo site_url('tanwinkasroh/practice'); ?>" class="nav-btn" style="background:#2563eb;">Latihan</a>
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn" style="background:#a259ff;">Dashboard</a>
        </div>
        <div class="grid">
            <?php foreach($huruf_list as $index => $huruf): ?>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/' . $huruf['latin']); ?>">
                <div class="huruf-card warna-<?php echo ($index % 28) + 1; ?>">
                    <div class="tanwinkasroh-strip">
                        <span class="kasroh1"></span>
                        <span class="kasroh2"></span>
                    </div>
                    <div class="huruf-utama"><?php echo $huruf['arabic']; ?></div>
                    <div class="huruf-latin"><?php echo $huruf['latin']; ?></div>
                    <div class="huruf-name"><?php echo $huruf['name']; ?></div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 