<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0; 
            min-height: 100vh;
        }
        .header { 
            background: rgba(255,255,255,0.1); 
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
            border: 2px solid rgba(255,255,255,0.3);
        }
        .huruf-display {
            font-size: 6em;
            color: #667eea;
            margin: 20px 0;
            text-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .fathah-symbol {
            font-size: 2em;
            color: #667eea;
            margin: 10px 0;
        }
        .huruf-info {
            margin: 30px 0;
        }
        .info-item {
            margin: 15px 0;
            padding: 15px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 15px;
            border-left: 5px solid #667eea;
        }
        .info-label {
            font-weight: bold;
            color: #667eea;
            font-size: 1.1em;
        }
        .info-value {
            color: #333;
            font-size: 1.2em;
            margin-top: 5px;
        }
        .pronunciation {
            background: linear-gradient(45deg, #667eea, #764ba2);
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
            background: rgba(102, 126, 234, 0.2);
            border: 2px solid #667eea;
            color: #667eea;
            padding: 15px 30px;
            border-radius: 15px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0 10px;
        }
        .practice-btn:hover {
            background: rgba(102, 126, 234, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .navigation {
            margin-top: 30px;
            text-align: center;
        }
        .nav-btn {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 20px;
            margin: 0 10px;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }
        .nav-btn:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            background: rgba(255,255,255,0.3);
            transform: translateX(-5px);
        }
        .new-huruf-btn {
            background: #4CAF50 !important;
            color: white !important;
            border-color: #4CAF50 !important;
        }
        .new-huruf-btn:hover {
            background: #45a049 !important;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="<?php echo site_url('fathah_new'); ?>" class="back-btn">← Kembali</a>
    <div class="header"><?php echo $title; ?></div>
    <div class="container">
        <div class="practice-card">
            <div class="huruf-display"><?php echo $practice_huruf['arabic']; ?></div>
            <div class="fathah-symbol">َ</div>
            
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
                    <div class="info-label">Cara Baca dengan Fathah:</div>
                    <div class="pronunciation"><?php echo $practice_huruf['latin']; ?>a</div>
                </div>
            </div>
            
            <div class="practice-buttons">
                <button class="practice-btn" onclick="playSound()">🔊 Dengarkan</button>
                <button class="practice-btn" onclick="repeatPractice()">🔄 Ulangi</button>
                <a href="<?php echo site_url('fathah_new/practice'); ?>" class="practice-btn new-huruf-btn">🎲 Huruf Baru</a>
            </div>
            
            <div class="navigation">
                <a href="<?php echo site_url('fathah_new'); ?>" class="nav-btn">🏠 Semua Huruf</a>
                <a href="<?php echo site_url('fathah_new/quiz'); ?>" class="nav-btn">🎯 Quiz</a>
                <a href="<?php echo site_url('fathah_new/detail/' . $practice_huruf['latin']); ?>" class="nav-btn">📖 Detail</a>
            </div>
        </div>
    </div>

    <script>
        function playSound() {
            // Simulate sound playing
            const pronunciation = '<?php echo $practice_huruf['latin']; ?>a';
            alert('Mengucapkan: ' + pronunciation);
            
            // In a real implementation, you would play an audio file here
            // const audio = new Audio('path/to/audio/' + pronunciation + '.mp3');
            // audio.play();
        }
        
        function repeatPractice() {
            // Refresh the page to get a new random huruf
            location.reload();
        }
    </script>
</body>
</html> 