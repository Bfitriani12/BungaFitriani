<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #38bdf8 100%);
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
            backdrop-filter: blur(10px);
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
        }
        .practice-card {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 2px solid #bae6fd;
        }
        .huruf-display {
            font-size: 6em;
            color: #2563eb;
            margin: 20px 0 0 0;
            text-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: relative;
        }
        .kasroh-strip {
            width: 36px;
            height: 8px;
            background: transparent;
            position: absolute;
            left: 50%;
            bottom: -8px;
            transform: translateX(-50%) rotate(12deg);
            z-index: 2;
        }
        .kasroh-strip::before {
            content: '';
            display: block;
            width: 30px;
            height: 5px;
            background: #2563eb;
            border-radius: 3px;
            margin: 0 auto;
        }
        .huruf-info {
            margin: 30px 0;
        }
        .info-item {
            margin: 15px 0;
            padding: 15px;
            background: rgba(56, 189, 248, 0.1);
            border-radius: 15px;
            border-left: 5px solid #38bdf8;
        }
        .info-label {
            font-weight: bold;
            color: #2563eb;
            font-size: 1.1em;
        }
        .info-value {
            color: #333;
            font-size: 1.2em;
            margin-top: 5px;
        }
        .pronunciation {
            background: linear-gradient(45deg, #38bdf8, #2563eb);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
            font-size: 1.5em;
            font-weight: bold;
        }
        .practice-buttons {
            margin: 30px 0;
        }
        .practice-btn {
            background: rgba(56, 189, 248, 0.2);
            border: 2px solid #2563eb;
            color: #2563eb;
            padding: 15px 30px;
            border-radius: 15px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0 10px;
        }
        .practice-btn:hover {
            background: rgba(56, 189, 248, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .navigation {
            margin-top: 30px;
            text-align: center;
        }
        .nav-btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 20px;
            margin: 0 10px;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid #bae6fd;
            transition: all 0.3s ease;
        }
        .nav-btn:hover {
            background: #38bdf8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid #bae6fd;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            background: #38bdf8;
            transform: translateX(-5px);
        }
        .new-huruf-btn {
            background: #38bdf8 !important;
            color: white !important;
            border-color: #38bdf8 !important;
        }
        .new-huruf-btn:hover {
            background: #2563eb !important;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="<?php echo site_url('kasroh'); ?>" class="back-btn">← Kembali</a>
    <div class="header"><?php echo $title; ?></div>
    <div class="container">
        <div class="practice-card">
            <div class="huruf-display" style="position:relative;">
                <?php echo $practice_huruf['arabic']; ?>
                <span class="kasroh-strip"></span>
            </div>
            <div class="huruf-info">
                <div class="info-item">
                    <div class="info-label">Nama Huruf:</div>
                    <div class="info-value"><?php echo $practice_huruf['name']; ?></div>
                </div>
                <div class="info-item">
                    <div class="info-label">Transliterasi:</div>
                    <div class="info-value"><?php echo $practice_huruf['latin']; ?></div>
                </div>
                <div class="info-item">
                    <div class="info-label">Cara Baca dengan Kasroh:</div>
                    <div class="pronunciation"><?php echo $practice_huruf['latin']; ?>i</div>
                </div>
            </div>
            <div class="practice-buttons">
                <button class="practice-btn" onclick="playSound()">🔊 Dengarkan</button>
                <button class="practice-btn" onclick="repeatPractice()">🔄 Ulangi</button>
                <a href="<?php echo site_url('kasroh/practice'); ?>" class="practice-btn new-huruf-btn">🎲 Huruf Baru</a>
            </div>
            <div class="navigation">
                <a href="<?php echo site_url('kasroh'); ?>" class="nav-btn">🏠 Semua Huruf</a>
                <a href="<?php echo site_url('kasroh/quiz'); ?>" class="nav-btn">🎯 Quiz</a>
                <a href="<?php echo site_url('kasroh/detail/' . $practice_huruf['latin']); ?>" class="nav-btn">📖 Detail</a>
            </div>
        </div>
    </div>
    <script>
        function playSound() {
            const pronunciation = '<?php echo $practice_huruf['latin']; ?>i';
            alert('Mengucapkan: ' + pronunciation);
        }
        function repeatPractice() {
            location.reload();
        }
    </script>
</body>
</html> 