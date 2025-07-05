<?php if (!function_exists('site_url')) $this->load->helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Huruf Hijaiyah</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f6f3ff; margin: 0; }
        .header { background: #a259ff; color: #fff; padding: 22px 0 16px 0; text-align: center; font-size: 2em; letter-spacing: 1px; box-shadow: 0 2px 8px #d1b3ff; }
        .tabs {
            display: flex;
            justify-content: center;
            background: #e9d8fd;
            padding: 0 0 8px 0;
            box-shadow: 0 2px 8px #e0cfff;
        }
        .tab {
            margin: 0 18px;
            padding: 10px 28px;
            background: #fff;
            color: #7c2ae8;
            border-radius: 8px 8px 0 0;
            font-weight: bold;
            font-size: 1.1em;
            box-shadow: 0 2px 8px #e0cfff;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .tab.active, .tab:hover {
            background: #a259ff;
            color: #fff;
        }
        .main { display: flex; }
        .sidebar {
            width: 260px;
            background: #d1b3ff;
            min-height: 100vh;
            padding: 30px 0 0 0;
            box-shadow: 2px 0 8px #e0cfff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .stat-card {
            width: 180px;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 18px #d1b3ff80;
            margin-bottom: 24px;
            padding: 24px 0 18px 0;
            text-align: center;
            border: 2px solid #e0cfff;
            transition: box-shadow 0.2s, border 0.2s;
            position: relative;
        }
        .stat-card .stat-icon {
            font-size: 2em;
            color: #a259ff;
            margin-bottom: 8px;
        }
        .stat-card .stat-number {
            font-size: 2.2em;
            font-weight: bold;
            color: #7c2ae8;
        }
        .stat-card .stat-label {
            font-size: 1em;
            color: #5a189a;
            margin-top: 4px;
        }
        .content { flex: 1; padding: 40px 40px 0 40px; }
        .input-form {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px #e0cfff;
            padding: 28px 32px 18px 32px;
            margin-bottom: 32px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            max-width: 600px;
        }
        .input-form label { font-weight: bold; color: #7c2ae8; margin-bottom: 6px; }
        .input-form input[type="text"], .input-form input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1.5px solid #a259ff;
            border-radius: 6px;
            margin-bottom: 16px;
            font-size: 1.1em;
        }
        .input-form button {
            background: #a259ff;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 28px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .input-form button:hover { background: #7c2ae8; }
        .scroll-grid {
            display: flex;
            gap: 28px;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-color: #a259ff #e0cfff;
            scrollbar-width: thin;
        }
        .huruf-card {
            min-width: 220px;
            max-width: 240px;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 18px #d1b3ff80;
            padding: 32px 18px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            border: 2px solid #e0cfff;
            position: relative;
            overflow: hidden;
            opacity: 0;
            animation: fadeInUp 0.7s forwards;
        }
        .huruf-card:hover { transform: translateY(-8px) scale(1.03); box-shadow: 0 8px 32px #a259ff55; border-color: #a259ff; }
        .huruf-utama {
            font-size: 2.8em;
            margin-bottom: 12px;
            color: #7c2ae8;
            font-weight: bold;
            letter-spacing: 2px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
        }
        .huruf-latin { font-size: 1.2em; color: #5a189a; margin-bottom: 10px; font-weight: 500; }
        .huruf-deskripsi { font-size: 1em; color: #888; margin-bottom: 18px; }
        .btn-detail { padding: 8px 18px; background: #a259ff; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; transition: background 0.2s; }
        .btn-detail:hover { background: #7c2ae8; }
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
        .scroll-grid::-webkit-scrollbar-thumb { background: #a259ff; border-radius: 6px; }
        .scroll-grid::-webkit-scrollbar-track { background: #e0cfff; border-radius: 6px; }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="header">Input Huruf Hijaiyah</div>
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
        <div class="sidebar">
            <div class="stat-card">
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
            <div class="stat-card" style="cursor: pointer; background: linear-gradient(135deg, #667eea, #764ba2); color: white;" onclick="window.location.href='<?php echo site_url('fathah'); ?>'">
                <div class="stat-icon" style="color: white;"><i class="fa-solid fa-star"></i></div>
                <div class="stat-number" style="color: white;">Fathah</div>
                <div class="stat-label" style="color: rgba(255,255,255,0.8);">Mulai Belajar</div>
            </div>
            <div class="stat-card" style="cursor: pointer; background: linear-gradient(135deg, #38bdf8, #2563eb); color: white;" onclick="window.location.href='<?php echo site_url('kasroh'); ?>'">
                <div class="stat-icon" style="color: white;"><i class="fa-solid fa-star"></i></div>
                <div class="stat-number" style="color: white;">Kasroh</div>
                <div class="stat-label" style="color: rgba(255,255,255,0.8);">Mulai Belajar</div>
            </div>
            <div class="stat-card" style="cursor: pointer; background: linear-gradient(135deg, #fbbf24, #f59e42); color: white;" onclick="window.location.href='<?php echo site_url('dhomah'); ?>'">
                <div class="stat-icon" style="color: white;"><i class="fa-solid fa-star"></i></div>
                <div class="stat-number" style="color: white;">Dhomah</div>
                <div class="stat-label" style="color: rgba(255,255,255,0.8);">Mulai Belajar</div>
            </div>
            <div class="stat-card" style="cursor: pointer; background: linear-gradient(135deg, #fdba74, #fbbf24); color: white;" onclick="window.location.href='<?php echo site_url('tanwinfathah'); ?>'">
                <div class="stat-icon" style="color: white;"><i class="fa-solid fa-star"></i></div>
                <div class="stat-number" style="color: white;">Tanwin Fathah</div>
                <div class="stat-label" style="color: rgba(255,255,255,0.8);">Mulai Belajar</div>
            </div>
        </div>
        <div class="content">
            <form class="input-form">
                <label for="cari">Cari Huruf</label>
                <input type="text" id="cari" name="cari" placeholder="Cari huruf hijaiyah...">
                <button type="submit"><i class="fa-solid fa-search"></i> Cari</button>
            </form>
            <div class="scroll-grid">
                <?php foreach($huruf as $h): ?>
                <div class="huruf-card">
                    <div class="huruf-utama"><?php echo $h['Huruf_1']; ?></div>
                    <div class="huruf-latin"><?php echo $h['Huruf_2']; ?></div>
                    <div class="huruf-deskripsi"><?php echo $h['Deskripsi']; ?></div>
                    <button class="btn-detail">Detail</button>
                </div>
                <?php endforeach; ?>
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
            const searchTerm = document.getElementById('cari').value.toLowerCase();
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