<?php if (!function_exists('site_url')) $this->load->helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Huruf Hijaiyah</title>
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
        .tabs {
            display: flex;
            justify-content: center;
            background: #f8f9ff;
            padding: 0 0 12px 0;
            box-shadow: 0 2px 8px #f3e8ff;
            border-radius: 0 0 24px 24px;
            margin-bottom: 10px;
        }
        .tab {
            margin: 0 18px;
            padding: 16px 38px;
            background: linear-gradient(90deg, #ff9a9e 0%, #fecfef 100%);
            color: #ff6b9d;
            border-radius: 18px 18px 0 0;
            font-weight: bold;
            font-size: 1.25em;
            box-shadow: 0 2px 8px #f3e8ff;
            cursor: pointer;
            transition: background 0.2s, color 0.2s, transform 0.2s;
            border: none;
            outline: none;
            margin-bottom: -2px;
        }
        .tab.active, .tab:hover {
            background: linear-gradient(90deg, #fecfef 0%, #ff9a9e 100%);
            color: #fff;
            transform: scale(1.08) translateY(-2px);
            box-shadow: 0 8px 24px #ff9a9e33;
        }
        .main { display: flex; }
        .sidebar {
            width: 260px;
            background: linear-gradient(135deg, #f3e8ff 0%, #a78bfa 100%);
            min-height: 100vh;
            padding: 30px 0 0 0;
            box-shadow: 2px 0 8px #e0cfff;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 0 32px 32px 0;
        }
        .centered-stats {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
            gap: 48px;
        }
        @media (max-width: 900px) {
            .centered-stats { flex-direction: column; gap: 28px; }
        }
        .stat-card {
            width: 220px;
            height: 180px;
            background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
            border-radius: 32px;
            box-shadow: 0 8px 32px rgba(255, 154, 158, 0.10);
            margin-bottom: 0;
            padding: 38px 0 18px 0;
            text-align: center;
            border: 3px solid transparent;
            transition: box-shadow 0.2s, border 0.2s, transform 0.2s;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 1.2em;
        }
        .stat-card .stat-icon {
            font-size: 3em;
            color: #ff6b9d;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef, #a8edea, #fed6e3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: iconBounce 2s ease-in-out infinite;
        }
        .stat-card .stat-number {
            font-size: 2.8em;
            font-weight: bold;
            color: #ff6b9d;
        }
        .stat-card .stat-label {
            font-size: 1.2em;
            color: #a259ff;
            margin-top: 6px;
        }
        .content { flex: 1; padding: 40px 40px 0 40px; }
        .centered-search {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
        }
        .input-form {
            background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
            border-radius: 18px;
            box-shadow: 0 2px 12px #f3e8ff;
            padding: 48px 56px 32px 56px;
            margin-bottom: 32px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            max-width: 520px;
            min-width: 380px;
        }
        .input-form label {
            font-size: 1.3em;
            font-weight: bold;
            color: #ff6b9d;
            margin-bottom: 10px;
        }
        .input-form input[type="text"] {
            width: 100%;
            padding: 18px;
            border: 2.5px solid #ff9a9e;
            border-radius: 12px;
            margin-bottom: 22px;
            font-size: 1.25em;
            background: #fff;
        }
        .input-form button {
            background: linear-gradient(90deg, #ff9a9e 0%, #fecfef 100%);
            color: #fff;
            border: none;
            border-radius: 18px;
            padding: 18px 48px;
            font-size: 1.25em;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 4px 16px #ff9a9e33;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .input-form button:hover {
            background: linear-gradient(90deg, #fecfef 0%, #ff9a9e 100%);
            transform: scale(1.07);
        }
        @media (max-width: 700px) {
            .input-form { padding: 24px 10px; min-width: unset; max-width: 98vw; }
        }
        .scroll-grid {
            display: flex;
            gap: 28px;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-color: #ff9a9e #f3e8ff;
            scrollbar-width: thin;
        }
        .huruf-card {
            min-width: 220px;
            max-width: 240px;
            background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
            border-radius: 22px;
            box-shadow: 0 8px 32px rgba(255, 154, 158, 0.10);
            padding: 32px 18px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s, border 0.2s;
            border: 3px solid transparent;
            position: relative;
            overflow: hidden;
            opacity: 0;
            animation: fadeInUp 0.7s forwards;
        }
        .huruf-card:hover { transform: translateY(-8px) scale(1.03); box-shadow: 0 8px 32px #ff9a9e55; border-color: #ff9a9e; }
        .huruf-utama {
            font-size: 2.8em;
            margin-bottom: 12px;
            color: #ff6b9d;
            font-weight: bold;
            letter-spacing: 2px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(45deg, #ff9a9e, #fecfef, #a8edea, #fed6e3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: iconBounce 2s ease-in-out infinite;
        }
        .huruf-latin { font-size: 1.2em; color: #a259ff; margin-bottom: 10px; font-weight: 500; }
        .huruf-deskripsi { font-size: 1em; color: #888; margin-bottom: 18px; }
        .btn-detail {
            padding: 12px 28px;
            background: linear-gradient(90deg, #ff9a9e 0%, #fecfef 100%);
            color: #fff;
            border: none;
            border-radius: 16px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.1em;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 2px 8px #ff9a9e33;
        }
        .btn-detail:hover {
            background: linear-gradient(90deg, #fecfef 0%, #ff9a9e 100%);
            transform: scale(1.05);
        }
        @media (max-width: 900px) {
            .sidebar { width: 120px; }
        }
        @media (max-width: 600px) {
            .main { flex-direction: column; }
            .sidebar { width: 100%; min-height: auto; }
            .content { padding: 20px; }
            .scroll-grid { gap: 16px; }
        }
        /* Animasi masuk */
        .huruf-card:nth-child(1) { animation-delay: 0.05s; }
        .huruf-card:nth-child(2) { animation-delay: 0.1s; }
        .huruf-card:nth-child(3) { animation-delay: 0.15s; }
        .huruf-card:nth-child(4) { animation-delay: 0.2s; }
        .huruf-card:nth-child(5) { animation-delay: 0.25s; }
        .huruf-card:nth-child(6) { animation-delay: 0.3s; }
        .huruf-card:nth-child(7) { animation-delay: 0.35s; }
        .huruf-card:nth-child(8) { animation-delay: 0.4s; }
        .huruf-card:nth-child(9) { animation-delay: 0.45s; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: none; }
        }
        /* Custom scrollbar */
        .scroll-grid::-webkit-scrollbar { height: 10px; }
        .scroll-grid::-webkit-scrollbar-thumb { background: #ff9a9e; border-radius: 6px; }
        .scroll-grid::-webkit-scrollbar-track { background: #f3e8ff; border-radius: 6px; }
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
        .stat-card[onclick] {
            transition: box-shadow 0.2s, border 0.2s, transform 0.2s, background 0.2s;
        }
        .stat-card[onclick]:hover {
            box-shadow: 0 18px 48px 0 #ff9a9e33;
            border-color: #ff9a9e;
            background: linear-gradient(135deg, #f8f9ff 60%, #a8edea 100%);
            transform: scale(1.04) translateY(-4px);
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <!-- Floating cute elements -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <!-- SVG Ilustrasi lucu di pojok kanan bawah -->
    <svg class="cute-illustration" width="220" height="180" viewBox="0 0 220 180" style="position:fixed; right:30px; bottom:20px; z-index:0; opacity:0.85;">
      <ellipse cx="110" cy="150" rx="90" ry="18" fill="#fcb69f"/>
      <circle cx="60" cy="110" r="38" fill="#a8edea"/>
      <circle cx="150" cy="120" r="32" fill="#fed6e3"/>
      <ellipse cx="110" cy="90" rx="60" ry="40" fill="#fff"/>
      <text x="110" y="110" text-anchor="middle" font-size="38" font-family="Poppins, Arial" fill="#ff9a9e" font-weight="bold">ا ب ت</text>
      <circle cx="180" cy="60" r="12" fill="#ff9a9e"/>
      <circle cx="40" cy="60" r="8" fill="#fecfef"/>
      <circle cx="200" cy="100" r="6" fill="#a8edea"/>
      <circle cx="30" cy="130" r="5" fill="#fed6e3"/>
    </svg>
    <!-- Ornamen floating tambahan -->
    <div style="position:fixed;left:40px;top:60px;z-index:0;opacity:0.7;animation:floatAround 12s linear infinite;">
      <svg width="60" height="60"><ellipse cx="30" cy="30" rx="28" ry="18" fill="#a8edea"/></svg>
    </div>
    <div style="position:fixed;right:80px;top:40px;z-index:0;opacity:0.7;animation:floatAround 10s linear infinite;animation-delay:2s;">
      <svg width="40" height="40"><circle cx="20" cy="20" r="18" fill="#fed6e3"/></svg>
    </div>
    <div style="position:fixed;left:100px;bottom:80px;z-index:0;opacity:0.7;animation:floatAround 14s linear infinite;animation-delay:1s;">
      <svg width="50" height="50"><ellipse cx="25" cy="25" rx="20" ry="12" fill="#ffecd2"/></svg>
    </div>
    <div class="header">🌸 Input Huruf Hijaiyah 🌸</div>
    <div class="tabs">
        <div class="tab active" data-tab="beranda">Beranda</div>
        <div class="tab" data-tab="fathah" onclick="window.location.href='<?php echo site_url('fathah'); ?>'">Fathah</div>
        <div class="tab" data-tab="kasroh" onclick="window.location.href='<?php echo site_url('kasroh'); ?>'">Kasroh</div>
        <div class="tab" data-tab="dhomah" onclick="window.location.href='<?php echo site_url('dhomah'); ?>'">Dhomah</div>
        <div class="tab" data-tab="tanwin-fathah" onclick="window.location.href='<?php echo site_url('tanwinfathah'); ?>'">Tanwin Fathah</div>
        <div class="tab" data-tab="tanwin-dhomah" onclick="window.location.href='<?php echo site_url('tanwindhomah'); ?>'">Tanwin Dhomah</div>
        <div class="tab" data-tab="tanwin-kasroh" onclick="window.location.href='<?php echo site_url('tanwinkasroh'); ?>'">Tanwin Kasroh</div>
        <div class="tab" data-tab="tajwid" onclick="window.location.href='<?php echo site_url('tajwid'); ?>'">Tajwid</div>
    </div>
    <div class="main">
        <div class="sidebar" style="display:none;"></div>
        <div class="content" style="width:100%;padding:0;">
            <div class="centered-stats">
                <div class="stat-card" style="cursor:pointer;" onclick="window.location.href='<?php echo site_url('hurufbergambar'); ?>'">
                    <div class="stat-icon"><i class="fa-solid fa-font"></i></div>
                    <div class="stat-number">28</div>
                    <div class="stat-label">Huruf Hijaiyah</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-number">3</div>
                    <div class="stat-label">Pengguna</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-book"></i></div>
                    <div class="stat-number">5</div>
                    <div class="stat-label">Materi</div>
                </div>
                <div class="stat-card" style="cursor:pointer; background: linear-gradient(135deg, #fbbf24 0%, #a8edea 100%); box-shadow: 0 8px 32px 0 #fbbf2433;" onclick="window.location.href='<?php echo site_url('hurufbergambar'); ?>'">
                    <div class="stat-icon" style="font-size:2.5em;"><i class="fa-solid fa-image"></i></div>
                    <div class="stat-number" style="color:#f59e42;">🎵</div>
                    <div class="stat-label" style="color:#a259ff;font-size:1.1em;">Huruf Bergambar &amp; Mendengarkan</div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Handle tab-specific actions
                const tabType = this.getAttribute('data-tab');
                if (tabType === 'fathah') {
                    // The onclick will handle the redirect
                    return;
                }
                
                // For other tabs, you can add specific functionality here
                console.log('Tab clicked:', tabType);
            });
        });
        
        // Add hover effects for better UX
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('mouseenter', function() {
                if (!this.classList.contains('active')) {
                    this.style.background = '#8b5cf6';
                    this.style.color = '#fff';
                }
            });
            
            tab.addEventListener('mouseleave', function() {
                if (!this.classList.contains('active')) {
                    this.style.background = '#fff';
                    this.style.color = '#7c2ae8';
                }
            });
        });
        
        // Search functionality
        document.querySelector('.input-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const searchTerm = document.getElementById('search').value.toLowerCase();
            const hurufCards = document.querySelectorAll('.huruf-card');
            
            hurufCards.forEach(card => {
                const hurufText = card.querySelector('.huruf-utama').textContent.toLowerCase();
                const latinText = card.querySelector('.huruf-latin').textContent.toLowerCase();
                
                if (hurufText.includes(searchTerm) || latinText.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html> 