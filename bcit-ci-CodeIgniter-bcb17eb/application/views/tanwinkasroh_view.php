<!DOCTYPE html>
<html>
<head>
    <title>Tanwin Kasroh - Huruf Hijaiyah</title>
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
            grid-template-columns: repeat(8, 1fr);
            gap: 20px;
            justify-items: center;
            margin: 0 auto 40px auto;
        }
        
        .huruf-link {
            text-decoration: none;
        }
        
        .huruf-card {
            width: 100px;
            height: 150px;
            background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(255, 154, 158, 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 3px solid transparent;
            position: relative;
            margin-bottom: 10px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            overflow: hidden;
        }
        
        .huruf-card::before {
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
        
        .huruf-card:hover::before {
            transform: scaleX(1);
        }
        
        .huruf-card:hover {
            transform: scale(1.08) translateY(-8px) rotate(2deg);
            box-shadow: 0 20px 50px rgba(255, 154, 158, 0.25);
            border-color: #ff9a9e;
            background: linear-gradient(135deg, #fff 0%, #fef7ff 100%);
        }
        
        .huruf-utama {
            font-size: 2.5em;
            color: #ff6b9d;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef, #a8edea, #fed6e3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: iconBounce 2s ease-in-out infinite;
        }
        
        @keyframes iconBounce {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }
        
        .huruf-latin {
            font-size: 1.1em;
            color: #fff;
            font-weight: bold;
            background: linear-gradient(90deg, #ff9a9e 0%, #fecfef 100%);
            border-radius: 12px;
            padding: 4px 12px;
            margin-top: 8px;
            box-shadow: 0 2px 8px rgba(255, 154, 158, 0.3);
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
        
        @media (max-width: 1200px) {
            .grid { grid-template-columns: repeat(4, 1fr); }
        }
        @media (max-width: 700px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Floating cute elements -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    
    <div class="header">🌸 Tanwin Kasroh - Huruf Hijaiyah 🌸</div>
    <div class="container">
        <?php if(isset($show_advanced_features) && $show_advanced_features): ?>
        <div class="nav-buttons">
            <a href="<?php echo site_url('tanwinkasroh/advanced'); ?>" class="nav-btn">🚀 Mode Lanjutan</a>
            <a href="<?php echo site_url('tanwinkasroh/quiz'); ?>" class="nav-btn">📝 Quiz Tanwin Kasroh</a>
            <a href="<?php echo site_url('tanwinkasroh/practice'); ?>" class="nav-btn">🎯 Latihan</a>
        </div>
        <?php endif; ?>
        <div class="grid">
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/A'); ?>"><div class="huruf-card"><div class="huruf-utama">ا</div><div class="huruf-latin">A</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ba'); ?>"><div class="huruf-card"><div class="huruf-utama">ب</div><div class="huruf-latin">Ba</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ta'); ?>"><div class="huruf-card"><div class="huruf-utama">ت</div><div class="huruf-latin">Ta</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Tsa'); ?>"><div class="huruf-card"><div class="huruf-utama">ث</div><div class="huruf-latin">Tsa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ja'); ?>"><div class="huruf-card"><div class="huruf-utama">ج</div><div class="huruf-latin">Ja</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ha'); ?>"><div class="huruf-card"><div class="huruf-utama">ح</div><div class="huruf-latin">Ha</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Kho'); ?>"><div class="huruf-card"><div class="huruf-utama">خ</div><div class="huruf-latin">Kho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Da'); ?>"><div class="huruf-card"><div class="huruf-utama">د</div><div class="huruf-latin">Da</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Dza'); ?>"><div class="huruf-card"><div class="huruf-utama">ذ</div><div class="huruf-latin">Dza</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ro'); ?>"><div class="huruf-card"><div class="huruf-utama">ر</div><div class="huruf-latin">Ro</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Za'); ?>"><div class="huruf-card"><div class="huruf-utama">ز</div><div class="huruf-latin">Za</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Sa'); ?>"><div class="huruf-card"><div class="huruf-utama">س</div><div class="huruf-latin">Sa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Sya'); ?>"><div class="huruf-card"><div class="huruf-utama">ش</div><div class="huruf-latin">Sya</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Sho'); ?>"><div class="huruf-card"><div class="huruf-utama">ص</div><div class="huruf-latin">Sho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Dho'); ?>"><div class="huruf-card"><div class="huruf-utama">ض</div><div class="huruf-latin">Dho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Tho'); ?>"><div class="huruf-card"><div class="huruf-utama">ط</div><div class="huruf-latin">Tho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Dzo'); ?>"><div class="huruf-card"><div class="huruf-utama">ظ</div><div class="huruf-latin">Dzo</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ain'); ?>"><div class="huruf-card"><div class="huruf-utama">ع</div><div class="huruf-latin">'A</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Gho'); ?>"><div class="huruf-card"><div class="huruf-utama">غ</div><div class="huruf-latin">Gho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Fa'); ?>"><div class="huruf-card"><div class="huruf-utama">ف</div><div class="huruf-latin">Fa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Qo'); ?>"><div class="huruf-card"><div class="huruf-utama">ق</div><div class="huruf-latin">Qo</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ka'); ?>"><div class="huruf-card"><div class="huruf-utama">ك</div><div class="huruf-latin">Ka</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/La'); ?>"><div class="huruf-card"><div class="huruf-utama">ل</div><div class="huruf-latin">La</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ma'); ?>"><div class="huruf-card"><div class="huruf-utama">م</div><div class="huruf-latin">Ma</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Na'); ?>"><div class="huruf-card"><div class="huruf-utama">ن</div><div class="huruf-latin">Na</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Wa'); ?>"><div class="huruf-card"><div class="huruf-utama">و</div><div class="huruf-latin">Wa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/HA'); ?>"><div class="huruf-card"><div class="huruf-utama">ه</div><div class="huruf-latin">HA</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('tanwinkasroh/detail/Ya'); ?>"><div class="huruf-card"><div class="huruf-utama">ي</div><div class="huruf-latin">Ya</div></div></a>
        </div>
    </div>
</body>
</html> 