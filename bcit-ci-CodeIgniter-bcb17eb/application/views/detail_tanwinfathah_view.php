<!DOCTYPE html>
<html>
<head>
    <title>Detail Tanwin Fathah - <?php echo $huruf['name']; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #fff7ed 0%, #fdba74 100%);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: #fdba74;
            color: #fff;
            padding: 25px 0;
            text-align: center;
            font-size: 2.2em;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #fde68a;
        }
        .container {
            width: 90%;
            margin: 30px auto;
            text-align: center;
        }
        .nav-buttons {
            text-align: center;
            margin-bottom: 30px;
        }
        .nav-btn {
            display: inline-block;
            background: #fdba74;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            margin: 0 10px;
            font-weight: bold;
        }
        .nav-btn:hover {
            background: #fbbf24;
        }
        .huruf-detail {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 20px auto;
            max-width: 600px;
            position: relative;
            border: 4px solid #fff;
        }
        .huruf-card {
            width: 200px;
            height: 300px;
            background: linear-gradient(135deg, #fdba74, #fbbf24);
            border-radius: 25px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border: 6px solid #fff;
            position: relative;
            margin: 0 auto 30px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        .huruf-card .tanwinfathah-strip {
            width: 60px;
            height: 30px;
            position: absolute;
            top: 25px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }
        .huruf-card .tanwinfathah-strip .fathah1,
        .huruf-card .tanwinfathah-strip .fathah2 {
            display: block;
            width: 50px;
            height: 8px;
            background: #e53935;
            border-radius: 4px;
            margin: 3px auto;
        }
        .huruf-card .tanwinfathah-strip .fathah2 {
            margin-top: 6px;
            transform: rotate(-12deg);
        }
        .huruf-utama {
            font-size: 4em;
            color: #333;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            margin-bottom: 15px;
            margin-top: 70px;
            text-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        .huruf-latin {
            font-size: 1.8em;
            color: #fff;
            font-weight: bold;
            background: linear-gradient(45deg, #e53935, #c62828);
            border-radius: 20px;
            padding: 8px 20px;
            margin-top: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .huruf-name {
            font-size: 1.2em;
            color: #666;
            margin-top: 10px;
            text-align: center;
        }
        .info-section {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            text-align: left;
        }
        .info-section h3 {
            color: #fdba74;
            margin-bottom: 15px;
            font-size: 1.4em;
        }
        .info-section p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .example-section {
            background: #fff3cd;
            border: 2px solid #fdba74;
            border-radius: 15px;
            padding: 20px;
            margin: 20px 0;
        }
        .example-section h4 {
            color: #856404;
            margin-bottom: 10px;
        }
        .example-word {
            font-size: 1.3em;
            color: #333;
            margin: 5px 0;
            font-weight: bold;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Detail Tanwin Fathah - <?php echo $huruf['name']; ?></div>
    <div class="container">
        <div class="nav-buttons">
            <a href="<?php echo site_url('tanwinfathah'); ?>" class="nav-btn">Kembali ke Tanwin Fathah</a>
            <a href="<?php echo site_url('tanwinfathah/quiz'); ?>" class="nav-btn" style="background:#e53935;">Quiz</a>
            <a href="<?php echo site_url('tanwinfathah/practice'); ?>" class="nav-btn" style="background:#a259ff;">Latihan</a>
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn" style="background:#34d399;">Dashboard</a>
        </div>
        
        <div class="huruf-detail">
            <div class="huruf-card">
                <div class="tanwinfathah-strip">
                    <span class="fathah1"></span>
                    <span class="fathah2"></span>
                </div>
                <div class="huruf-utama"><?php echo $huruf['arabic']; ?></div>
                <div class="huruf-latin"><?php echo $huruf['latin']; ?></div>
                <div class="huruf-name"><?php echo $huruf['name']; ?></div>
            </div>
            
            <div class="info-section">
                <h3>Penjelasan Tanwin Fathah</h3>
                <p>Tanwin Fathah adalah tanda baca dalam huruf hijaiyah yang terdiri dari dua fathah (ــَـَـ). Tanda ini memberikan bunyi "an" di akhir kata.</p>
                <p>Huruf <?php echo $huruf['name']; ?> dengan tanwin fathah dibaca: <?php echo $huruf['latin']; ?>an</p>
            </div>
            
            <div class="example-section">
                <h4>Contoh Kata dengan Tanwin Fathah:</h4>
                <div class="example-word">كِتَابٌ (kitaabun) - sebuah kitab</div>
                <div class="example-word">قَلَمٌ (qalamun) - sebuah pena</div>
                <div class="example-word">بَيْتٌ (baytun) - sebuah rumah</div>
            </div>
            
            <div class="info-section">
                <h3>Cara Membaca</h3>
                <p>1. Baca huruf <?php echo $huruf['name']; ?> dengan bunyi fathah: <?php echo $huruf['latin']; ?>a</p>
                <p>2. Tambahkan bunyi "n" di akhir: <?php echo $huruf['latin']; ?>an</p>
                <p>3. Jangan berhenti di tengah, baca dengan lancar</p>
            </div>
        </div>
    </div>
</body>
</html> 