<!DOCTYPE html>
<html>
<head>
    <title>Latihan Tanwin Kasroh</title>
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
            max-width: 800px;
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
        .practice-container {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 20px auto;
        }
        .instruction {
            font-size: 1.3em;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
        }
        .huruf-display {
            text-align: center;
            margin: 30px 0;
        }
        .huruf-card {
            width: 200px;
            height: 250px;
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            border-radius: 25px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border: 6px solid #fff;
            position: relative;
            margin: 0 auto;
            transition: all 0.3s ease;
        }
        .huruf-card .tanwinkasroh-strip {
            width: 40px;
            height: 20px;
            position: absolute;
            bottom: 20px;
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
            width: 32px;
            height: 6px;
            background: #2563eb;
            border-radius: 3px;
            margin: 2px 0;
            display: block;
        }
        .huruf-card .tanwinkasroh-strip .kasroh2 {
            margin-top: 4px;
            width: 32px;
            transform: rotate(-10deg);
        }
        .huruf-utama {
            font-size: 4em;
            color: #333;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            margin-bottom: 15px;
            margin-top: 60px;
            text-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        .huruf-latin {
            font-size: 1.5em;
            color: #fff;
            font-weight: bold;
            background: linear-gradient(45deg, #2563eb, #60a5fa);
            border-radius: 18px;
            padding: 8px 18px;
            margin-top: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .huruf-name {
            font-size: 1.1em;
            color: #666;
            margin-top: 8px;
            text-align: center;
        }
        .reading-guide {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin: 30px 0;
            text-align: center;
        }
        .reading-guide h3 {
            color: #2563eb;
            margin-bottom: 15px;
            font-size: 1.4em;
        }
        .reading-text {
            font-size: 1.8em;
            color: #333;
            font-weight: bold;
            margin: 10px 0;
        }
        .pronunciation {
            font-size: 1.2em;
            color: #666;
            font-style: italic;
            margin: 5px 0;
        }
        .practice-buttons {
            text-align: center;
            margin: 30px 0;
        }
        .practice-btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 10px;
            margin: 0 10px;
            font-weight: bold;
            font-size: 1.1em;
            transition: all 0.3s ease;
        }
        .practice-btn:hover {
            background: #60a5fa;
            transform: translateY(-2px);
        }
        .next-btn {
            display: block;
            background: #1e40af;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 10px;
            margin: 20px auto;
            font-weight: bold;
            font-size: 1.2em;
            text-align: center;
            max-width: 200px;
        }
        .next-btn:hover {
            background: #2563eb;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Latihan Tanwin Kasroh</div>
    <div class="container">
        <div class="nav-buttons">
            <a href="<?php echo site_url('tanwinkasroh'); ?>" class="nav-btn">Kembali ke Tanwin Kasroh</a>
            <a href="<?php echo site_url('tanwinkasroh/quiz'); ?>" class="nav-btn" style="background:#2563eb;">Quiz</a>
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn" style="background:#a259ff;">Dashboard</a>
        </div>
        <div class="practice-container">
            <div class="instruction">Latihan Membaca Tanwin Kasroh</div>
            <div class="huruf-display">
                <div class="huruf-card">
                    <div class="tanwinkasroh-strip">
                        <span class="kasroh1"></span>
                        <span class="kasroh2"></span>
                    </div>
                    <div class="huruf-utama"><?php echo $current_huruf['arabic']; ?></div>
                    <div class="huruf-latin"><?php echo $current_huruf['latin']; ?></div>
                    <div class="huruf-name"><?php echo $current_huruf['name']; ?></div>
                </div>
            </div>
            <div class="reading-guide">
                <h3>Cara Membaca Tanwin Kasroh</h3>
                <div class="reading-text"><?php echo $current_huruf['latin']; ?>in</div>
                <div class="pronunciation">Baca: <?php echo $current_huruf['latin']; ?> + i + n</div>
                <p>1. Baca huruf <?php echo $current_huruf['name']; ?> dengan bunyi kasroh: <?php echo $current_huruf['latin']; ?>i</p>
                <p>2. Tambahkan bunyi "n" di akhir: <?php echo $current_huruf['latin']; ?>in</p>
                <p>3. Baca dengan lancar dan tidak terputus</p>
            </div>
            <div class="practice-buttons">
                <a href="<?php echo site_url('tanwinkasroh/practice'); ?>" class="practice-btn">Latihan Lagi</a>
                <a href="<?php echo site_url('tanwinkasroh/quiz'); ?>" class="practice-btn" style="background:#2563eb;">Mulai Quiz</a>
            </div>
            <a href="<?php echo site_url('tanwinkasroh/practice'); ?>" class="next-btn">Huruf Berikutnya</a>
        </div>
    </div>
</body>
</html> 