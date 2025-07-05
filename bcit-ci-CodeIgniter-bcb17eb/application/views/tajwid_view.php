<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #f3e8ff 0%, #a78bfa 100%);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: linear-gradient(90deg, #a259ff 60%, #6ee7b7 100%);
            color: #fff;
            padding: 32px 0 24px 0;
            text-align: center;
            font-size: 2.5em;
            letter-spacing: 1px;
            font-weight: bold;
            box-shadow: 0 2px 12px #a78bfa44;
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
            background: linear-gradient(90deg, #a259ff 60%, #6ee7b7 100%);
            color: white;
            padding: 14px 32px;
            text-decoration: none;
            border-radius: 12px;
            margin: 0 10px;
            font-weight: bold;
            font-size: 1.1em;
            box-shadow: 0 2px 8px #a78bfa33;
            transition: background 0.2s, transform 0.2s;
        }
        .nav-btn:hover {
            background: linear-gradient(90deg, #6ee7b7 0%, #a259ff 100%);
            transform: translateY(-2px) scale(1.04);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 32px;
            justify-items: center;
            margin: 0 auto 40px auto;
        }
        .tajwid-card {
            background: linear-gradient(135deg, #fff 60%, #f3e8ff 100%);
            border-radius: 22px;
            box-shadow: 0 8px 32px rgba(162,89,255,0.10);
            padding: 38px 28px 28px 28px;
            text-align: center;
            border: 3px solid #fff;
            transition: all 0.25s cubic-bezier(.4,2,.6,1);
            cursor: pointer;
            min-height: 220px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .tajwid-card:hover {
            transform: scale(1.045) translateY(-7px);
            box-shadow: 0 18px 48px 0 #a259ff33;
            border-color: #a259ff;
            background: linear-gradient(135deg, #f3e8ff 0%, #fff 100%);
        }
        .tajwid-icon {
            font-size: 2.8em;
            margin-bottom: 18px;
            color: #a259ff;
            background: linear-gradient(90deg, #a259ff 60%, #6ee7b7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .tajwid-title {
            font-size: 1.45em;
            color: #a259ff;
            font-weight: bold;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }
        .tajwid-desc {
            color: #555;
            font-size: 1.08em;
            margin-bottom: 18px;
        }
        .detail-btn {
            background: linear-gradient(90deg, #a259ff 60%, #6ee7b7 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 12px 28px;
            font-weight: bold;
            font-size: 1.08em;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
            text-decoration: none;
            box-shadow: 0 2px 8px #a78bfa33;
        }
        .detail-btn:hover {
            background: linear-gradient(90deg, #6ee7b7 0%, #a259ff 100%);
            transform: scale(1.04);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Materi Tajwid</div>
    <div class="container">
        <div class="nav-buttons">
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn">Kembali ke Dashboard</a>
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
                <a href="<?php echo site_url('tajwid/detail/' . $tajwid['slug']); ?>" class="detail-btn">Lihat Detail</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 