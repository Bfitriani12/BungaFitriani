<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 25%, #ffecd2 50%, #fcb69f 75%, #ffecd2 100%);
            margin: 0;
            min-height: 100vh;
            animation: gradientShift 8s ease-in-out infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% { background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 25%, #ffecd2 50%, #fcb69f 75%, #ffecd2 100%); }
            25% { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 25%, #a8edea 50%, #fed6e3 75%, #a8edea 100%); }
            50% { background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 25%, #ffecd2 50%, #fcb69f 75%, #ffecd2 100%); }
            75% { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 25%, #a8edea 50%, #fed6e3 75%, #a8edea 100%); }
        }
        
        .header {
            background: linear-gradient(90deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
            color: #fff;
            padding: 32px 0 24px 0;
            text-align: center;
            font-size: 2.5em;
            letter-spacing: 1px;
            font-weight: bold;
            box-shadow: 0 4px 20px rgba(255, 154, 158, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .container {
            width: 96%;
            margin: 36px auto 0 auto;
            max-width: 1200px;
        }
        
        .nav-buttons {
            text-align: center;
            margin-bottom: 36px;
        }
        
        .nav-btn {
            display: inline-block;
            background: linear-gradient(90deg, #ff9a9e 0%, #fecfef 100%);
            color: white;
            padding: 16px 36px;
            text-decoration: none;
            border-radius: 25px;
            margin: 0 10px;
            font-weight: bold;
            font-size: 1.1em;
            box-shadow: 0 4px 15px rgba(255, 154, 158, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .nav-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .nav-btn:hover::before {
            left: 100%;
        }
        
        .nav-btn:hover {
            background: linear-gradient(90deg, #fecfef 0%, #ff9a9e 100%);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(255, 154, 158, 0.4);
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
            justify-items: center;
            margin: 0 auto 40px auto;
        }
        
        .tajwid-card {
            background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(255, 154, 158, 0.15);
            padding: 40px 30px 30px 30px;
            text-align: center;
            border: 3px solid transparent;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            min-height: 240px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .tajwid-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff9a9e, #fecfef, #a8edea, #fed6e3);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .tajwid-card:hover::before {
            transform: scaleX(1);
        }
        
        .tajwid-card:hover {
            transform: scale(1.05) translateY(-8px) rotate(1deg);
            box-shadow: 0 20px 50px rgba(255, 154, 158, 0.25);
            border-color: #ff9a9e;
            background: linear-gradient(135deg, #fff 0%, #fef7ff 100%);
        }
        
        .tajwid-icon {
            font-size: 3.2em;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef, #a8edea, #fed6e3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: iconBounce 2s ease-in-out infinite;
        }
        
        @keyframes iconBounce {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }
        
        .tajwid-title {
            font-size: 1.5em;
            color: #ff6b9d;
            font-weight: bold;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }
        
        .tajwid-desc {
            color: #666;
            font-size: 1.1em;
            margin-bottom: 20px;
            line-height: 1.4;
        }
        
        .detail-btn {
            background: linear-gradient(90deg, #ff9a9e 0%, #fecfef 100%);
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 14px 32px;
            font-weight: bold;
            font-size: 1.1em;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(255, 154, 158, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .detail-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .detail-btn:hover::before {
            left: 100%;
        }
        
        .detail-btn:hover {
            background: linear-gradient(90deg, #fecfef 0%, #ff9a9e 100%);
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 154, 158, 0.4);
        }
        
        /* Floating elements for extra cuteness */
        .floating-element {
            position: fixed;
            width: 20px;
            height: 20px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef);
            border-radius: 50%;
            animation: floatAround 10s linear infinite;
            opacity: 0.6;
            z-index: -1;
        }
        
        .floating-element:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .floating-element:nth-child(2) { top: 20%; right: 15%; animation-delay: 2s; }
        .floating-element:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 4s; }
        .floating-element:nth-child(4) { bottom: 20%; right: 10%; animation-delay: 6s; }
        
        @keyframes floatAround {
            0% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-20px) rotate(90deg); }
            50% { transform: translateY(0px) rotate(180deg); }
            75% { transform: translateY(20px) rotate(270deg); }
            100% { transform: translateY(0px) rotate(360deg); }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Floating cute elements -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    
    <div class="header">🌸 Materi Tajwid 🌸</div>
    <div class="container">
        <div class="nav-buttons">
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn">🏠 Kembali ke Dashboard</a>
        </div>
        <div class="grid">
            <?php 
            $icons = [
                'mad' => 'fa-wave-square',
                'ghunnah' => 'fa-wind',
                'idgham' => 'fa-arrows-turn-to-dots',
                'iqlab' => 'fa-retweet',
                'ikhfa' => 'fa-eye-slash',
                'idhar' => 'fa-eye',
                'qalqalah' => 'fa-volume-up',
            ];
            foreach($tajwid_list as $tajwid): ?>
            <div class="tajwid-card">
                <div class="tajwid-icon">
                    <i class="fa-solid <?php echo isset($icons[$tajwid['slug']]) ? $icons[$tajwid['slug']] : 'fa-book-quran'; ?>"></i>
                </div>
                <div class="tajwid-title"><?php echo $tajwid['name']; ?></div>
                <div class="tajwid-desc"><?php echo $tajwid['desc']; ?></div>
                <a href="<?php echo site_url('tajwid/detail/' . $tajwid['slug']); ?>" class="detail-btn">✨ Lihat Detail ✨</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 