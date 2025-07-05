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
            border-bottom: 2px solid rgba(255,255,255,0.2);
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
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 25px;
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
            height: 160px;
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(255,255,255,0.3);
            position: relative;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            backdrop-filter: blur(10px);
        }
        .huruf-card:hover { 
            transform: scale(1.05) translateY(-5px); 
            box-shadow: 0 15px 40px rgba(0,0,0,0.2); 
            border-color: rgba(255,255,255,0.6);
        }
        .huruf-utama {
            font-size: 2.5em;
            color: #333;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .huruf-latin {
            font-size: 1.1em;
            color: #fff;
            font-weight: bold;
            background: linear-gradient(45deg, #667eea, #764ba2);
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
        @media (max-width: 768px) {
            .grid { 
                grid-template-columns: repeat(3, 1fr); 
                gap: 15px;
            }
            .huruf-card {
                width: 100px;
                height: 140px;
            }
            .huruf-utama {
                font-size: 2em;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="<?php echo site_url('fathah'); ?>" class="back-btn">← Kembali</a>
    <div class="header"><?php echo $title; ?></div>
    <div class="container">
        <div class="nav-buttons">
            <a href="<?php echo site_url('fathah_new/quiz'); ?>" class="nav-btn">🎯 Quiz Fathah</a>
            <a href="<?php echo site_url('fathah_new/practice'); ?>" class="nav-btn">📝 Latihan</a>
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn">🏠 Dashboard</a>
        </div>
        <div class="grid">
            <?php foreach($huruf_list as $index => $huruf): ?>
            <a class="huruf-link" href="<?php echo site_url('fathah_new/detail/' . $huruf['latin']); ?>">
                <div class="huruf-card">
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