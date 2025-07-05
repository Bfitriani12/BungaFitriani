<!DOCTYPE html>
<html>
<head>
    <title>Admin - Pengelolaan Huruf Hijaiyah</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f6f3ff; margin: 0; }
        .header { background: #a259ff; color: #fff; padding: 22px 0 16px 0; text-align: center; font-size: 2em; letter-spacing: 1px; box-shadow: 0 2px 8px #d1b3ff; position: relative; }
        .config-btn { position: absolute; right: 32px; top: 22px; background: #fff; color: #a259ff; border: none; border-radius: 50%; width: 38px; height: 38px; font-size: 1.3em; cursor: pointer; box-shadow: 0 2px 8px #e0cfff; transition: background 0.2s; }
        .config-btn:hover { background: #d1b3ff; }
        .tabs { display: flex; justify-content: center; background: #e9d8fd; padding: 0 0 8px 0; box-shadow: 0 2px 8px #e0cfff; }
        .tab { margin: 0 18px; padding: 10px 28px; background: #fff; color: #7c2ae8; border-radius: 8px 8px 0 0; font-weight: bold; font-size: 1.1em; box-shadow: 0 2px 8px #e0cfff; cursor: pointer; transition: background 0.2s, color 0.2s; }
        .tab.active, .tab:hover { background: #a259ff; color: #fff; }
        .main { display: flex; }
        .sidebar { width: 220px; background: #d1b3ff; min-height: 100vh; padding-top: 30px; box-shadow: 2px 0 8px #e0cfff; }
        .sidebar ul { list-style: none; padding: 0; }
        .sidebar li { margin-bottom: 18px; }
        .sidebar a { color: #5a189a; text-decoration: none; font-weight: bold; padding: 12px 24px; display: block; border-radius: 6px; transition: background 0.2s, color 0.2s; font-size: 1.1em; }
        .sidebar a:hover, .sidebar .active { background: #a259ff; color: #fff; }
        .content { flex: 1; padding: 40px; }
        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 20px; }
        .manage-card { background: #fff; border-radius: 14px; box-shadow: 0 4px 18px #d1b3ff80; padding: 28px 18px; text-align: center; border: 2px solid #e0cfff; position: relative; transition: box-shadow 0.2s, border 0.2s; }
        .manage-card:hover { box-shadow: 0 8px 32px #a259ff55; border-color: #a259ff; }
        .manage-label { font-size: 1.1em; color: #7c2ae8; font-weight: bold; margin-bottom: 10px; }
        .manage-number { font-size: 2em; color: #a259ff; font-weight: bold; margin-bottom: 10px; }
        .manage-btn { padding: 8px 18px; background: #a259ff; color: #fff; border: none; border-radius: 6px; font-weight: bold; font-size: 1em; cursor: pointer; transition: background 0.2s; margin-top: 8px; }
        .manage-btn:hover { background: #7c2ae8; }
        .logout-btn { margin-top: 30px; padding: 10px 28px; background: #f87171; color: #fff; border: none; border-radius: 6px; font-size: 1.1em; font-weight: bold; cursor: pointer; transition: background 0.2s; }
        .logout-btn:hover { background: #c53030; }
        @media (max-width: 900px) { .grid { grid-template-columns: repeat(2, 1fr); } .sidebar { width: 120px; } }
        @media (max-width: 600px) { .main { flex-direction: column; } .sidebar { width: 100%; min-height: auto; } .content { padding: 20px; } .grid { grid-template-columns: 1fr; } }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="header">
        Pengelolaan Huruf Hijaiyah
        <button class="config-btn"><i class="fa-solid fa-gear"></i></button>
    </div>
    <div class="tabs">
        <div class="tab active">Home</div>
        <div class="tab">Fathah</div>
        <div class="tab">Kasroh</div>
        <div class="tab">Dhomah</div>
        <div class="tab">Tanwin Fathah</div>
        <div class="tab">Tanwin Dhomah</div>
        <div class="tab">Tanwin Kasroh</div>
        <div class="tab">Tajwid</div>
    </div>
    <div class="main">
        <div class="sidebar">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Fathah</a></li>
                <li><a href="#">Kasroh</a></li>
                <li><a href="#">Dhomah</a></li>
                <li><a href="#">Tanwin Fathah</a></li>
                <li><a href="#">Tanwin Dhomah</a></li>
                <li><a href="#">Tanwin Kasroh</a></li>
                <li><a href="#">Tajwid</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="grid">
                <div class="manage-card">
                    <div class="manage-label">Total Huruf Fathah</div>
                    <div class="manage-number"><?php echo $total_fathah; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
                <div class="manage-card">
                    <div class="manage-label">Total Pengguna</div>
                    <div class="manage-number"><?php echo $total_pengguna; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
                <div class="manage-card">
                    <div class="manage-label">Total Huruf Kasroh</div>
                    <div class="manage-number"><?php echo $total_kasroh; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
                <div class="manage-card">
                    <div class="manage-label">Total Huruf Dhomah</div>
                    <div class="manage-number"><?php echo $total_dhomah; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
                <div class="manage-card">
                    <div class="manage-label">Total Huruf Tanwin Fathah</div>
                    <div class="manage-number"><?php echo $total_tanwin_fathah; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
                <div class="manage-card">
                    <div class="manage-label">Total Huruf Tanwin Dhomah</div>
                    <div class="manage-number"><?php echo $total_tanwin_dhomah; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
                <div class="manage-card">
                    <div class="manage-label">Total Huruf Tanwin Kasroh</div>
                    <div class="manage-number"><?php echo $total_tanwin_kasroh; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
                <div class="manage-card">
                    <div class="manage-label">Total Huruf Tajwid</div>
                    <div class="manage-number"><?php echo $total_tajwid; ?></div>
                    <button class="manage-btn">Lihat Lengkap</button>
                </div>
            </div>
            <button class="logout-btn" style="float:right;">Log Out</button>
        </div>
    </div>
</body>
</html> 