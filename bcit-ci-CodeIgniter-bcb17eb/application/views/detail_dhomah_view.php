<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #fef9c3 0%, #fbbf24 100%);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: #fbbf24;
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
        .huruf-detail {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 2px solid #fde68a;
        }
        .huruf-display {
            font-size: 8em;
            color: #333;
            margin: 20px 0 0 0;
            text-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: relative;
        }
        .dhomah-strip {
            width: 32px;
            height: 32px;
            background: #22c55e;
            border-radius: 50%;
            position: absolute;
            top: -18px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            border: 5px solid #fff;
        }
        .huruf-info {
            margin: 30px 0;
        }
        .info-item {
            margin: 15px 0;
            padding: 15px;
            background: rgba(251, 191, 36, 0.1);
            border-radius: 15px;
            border-left: 5px solid #fbbf24;
        }
        .info-label {
            font-weight: bold;
            color: #22c55e;
            font-size: 1.1em;
        }
        .info-value {
            color: #333;
            font-size: 1.2em;
            margin-top: 5px;
        }
        .pronunciation {
            background: linear-gradient(45deg, #fbbf24, #22c55e);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
            font-size: 1.3em;
            font-weight: bold;
        }
        .navigation {
            margin-top: 30px;
            text-align: center;
        }
        .nav-btn {
            display: inline-block;
            background: #22c55e;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 20px;
            margin: 0 10px;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid #fde68a;
            transition: all 0.3s ease;
        }
        .nav-btn:hover {
            background: #fbbf24;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background: #22c55e;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid #fde68a;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            background: #fbbf24;
            transform: translateX(-5px);
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="<?php echo site_url('dhomah'); ?>" class="back-btn">← Kembali</a>
    <div class="header"><?php echo $title; ?></div>
    <div class="container">
        <div class="huruf-detail">
            <div class="huruf-display" style="position:relative;">
                <span class="dhomah-strip"></span>
                <?php echo $huruf_data['arabic']; ?>
            </div>
            <div class="huruf-info">
                <div class="info-item">
                    <div class="info-label">Nama Huruf:</div>
                    <div class="info-value"><?php echo $huruf_data['name']; ?></div>
                </div>
                <div class="info-item">
                    <div class="info-label">Transliterasi:</div>
                    <div class="info-value"><?php echo $huruf_data['latin']; ?></div>
                </div>
                <div class="info-item">
                    <div class="info-label">Cara Baca dengan Dhomah:</div>
                    <div class="pronunciation"><?php echo $huruf_data['latin']; ?>u</div>
                </div>
            </div>
            <div class="navigation">
                <a href="<?php echo site_url('dhomah'); ?>" class="nav-btn">🏠 Semua Huruf</a>
                <a href="<?php echo site_url('dhomah/quiz'); ?>" class="nav-btn">🎯 Quiz</a>
                <a href="<?php echo site_url('dhomah/practice'); ?>" class="nav-btn">📝 Latihan</a>
            </div>
        </div>
    </div>
</body>
</html> 