<!DOCTYPE html>
<html>
<head>
    <title>Fathah - Huruf Hijaiyah</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f6f3ff; margin: 0; }
        .header { background: #a259ff; color: #fff; padding: 22px 0; text-align: center; font-size: 2em; letter-spacing: 1px; box-shadow: 0 2px 8px #d1b3ff; }
        .container { width: 90%; margin: 30px auto; }
        .grid { display: grid; grid-template-columns: repeat(8, 1fr); gap: 18px; justify-items: center; }
        .huruf-link { text-decoration: none; }
        .huruf-card {
            width: 90px;
            height: 140px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 18px #d1b3ff80;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 3px solid #e0cfff;
            position: relative;
            margin-bottom: 10px;
            transition: transform 0.2s, box-shadow 0.2s, border 0.2s;
            cursor: pointer;
        }
        .huruf-card:hover { transform: scale(1.07); box-shadow: 0 8px 32px #a259ff55; border-color: #a259ff; }
        .huruf-utama {
            font-size: 2.2em;
            color: #222;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            margin-bottom: 8px;
        }
        .huruf-latin {
            font-size: 1em;
            color: #fff;
            font-weight: bold;
            background: #a259ff;
            border-radius: 8px;
            padding: 2px 10px;
            margin-top: 8px;
        }
        .warna-1 { background: #e0e7ff; }
        .warna-2 { background: #c7d2fe; }
        .warna-3 { background: #a5b4fc; }
        .warna-4 { background: #818cf8; }
        .warna-5 { background: #f9a8d4; }
        .warna-6 { background: #fcd34d; }
        .warna-7 { background: #fbbf24; }
        .warna-8 { background: #f87171; }
        .warna-9 { background: #6ee7b7; }
        .warna-10 { background: #f472b6; }
        .warna-11 { background: #facc15; }
        .warna-12 { background: #fdba74; }
        .warna-13 { background: #34d399; }
        .warna-14 { background: #a3e635; }
        .warna-15 { background: #f472b6; }
        .warna-16 { background: #fbbf24; }
        .warna-17 { background: #a78bfa; }
        .warna-18 { background: #f87171; }
        .warna-19 { background: #fbbf24; }
        .warna-20 { background: #f472b6; }
        .warna-21 { background: #a3e635; }
        .warna-22 { background: #f87171; }
        .warna-23 { background: #fbbf24; }
        .warna-24 { background: #a78bfa; }
        .warna-25 { background: #f472b6; }
        .warna-26 { background: #a3e635; }
        .warna-27 { background: #f87171; }
        .warna-28 { background: #fbbf24; }
        @media (max-width: 1200px) {
            .grid { grid-template-columns: repeat(4, 1fr); }
        }
        @media (max-width: 700px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Fathah - Huruf Hijaiyah</div>
    <div class="container">
        <?php if(isset($show_advanced_features) && $show_advanced_features): ?>
        <div style="text-align: center; margin-bottom: 30px;">
            <a href="<?php echo site_url('fathah/advanced'); ?>" style="display: inline-block; background: #4CAF50; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; margin: 0 10px; font-weight: bold;">Mode Lanjutan</a>
            <a href="<?php echo site_url('fathah/quiz'); ?>" style="display: inline-block; background: #2196F3; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; margin: 0 10px; font-weight: bold;">Quiz Fathah</a>
            <a href="<?php echo site_url('fathah/practice'); ?>" style="display: inline-block; background: #FF9800; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; margin: 0 10px; font-weight: bold;">Latihan</a>
        </div>
        <?php endif; ?>
        <div class="grid">
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/A'); ?>"><div class="huruf-card warna-1"><div class="huruf-utama">ا</div><div class="huruf-latin">A</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ba'); ?>"><div class="huruf-card warna-2"><div class="huruf-utama">ب</div><div class="huruf-latin">Ba</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ta'); ?>"><div class="huruf-card warna-3"><div class="huruf-utama">ت</div><div class="huruf-latin">Ta</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Tsa'); ?>"><div class="huruf-card warna-4"><div class="huruf-utama">ث</div><div class="huruf-latin">Tsa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ja'); ?>"><div class="huruf-card warna-5"><div class="huruf-utama">ج</div><div class="huruf-latin">Ja</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ha'); ?>"><div class="huruf-card warna-6"><div class="huruf-utama">ح</div><div class="huruf-latin">Ha</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Kho'); ?>"><div class="huruf-card warna-7"><div class="huruf-utama">خ</div><div class="huruf-latin">Kho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Da'); ?>"><div class="huruf-card warna-8"><div class="huruf-utama">د</div><div class="huruf-latin">Da</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Dza'); ?>"><div class="huruf-card warna-9"><div class="huruf-utama">ذ</div><div class="huruf-latin">Dza</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ro'); ?>"><div class="huruf-card warna-10"><div class="huruf-utama">ر</div><div class="huruf-latin">Ro</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Za'); ?>"><div class="huruf-card warna-11"><div class="huruf-utama">ز</div><div class="huruf-latin">Za</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Sa'); ?>"><div class="huruf-card warna-12"><div class="huruf-utama">س</div><div class="huruf-latin">Sa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Sya'); ?>"><div class="huruf-card warna-13"><div class="huruf-utama">ش</div><div class="huruf-latin">Sya</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Sho'); ?>"><div class="huruf-card warna-14"><div class="huruf-utama">ص</div><div class="huruf-latin">Sho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Dho'); ?>"><div class="huruf-card warna-15"><div class="huruf-utama">ض</div><div class="huruf-latin">Dho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Tho'); ?>"><div class="huruf-card warna-16"><div class="huruf-utama">ط</div><div class="huruf-latin">Tho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Dzo'); ?>"><div class="huruf-card warna-17"><div class="huruf-utama">ظ</div><div class="huruf-latin">Dzo</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ain'); ?>"><div class="huruf-card warna-18"><div class="huruf-utama">ع</div><div class="huruf-latin">'A</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Gho'); ?>"><div class="huruf-card warna-19"><div class="huruf-utama">غ</div><div class="huruf-latin">Gho</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Fa'); ?>"><div class="huruf-card warna-20"><div class="huruf-utama">ف</div><div class="huruf-latin">Fa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Qo'); ?>"><div class="huruf-card warna-21"><div class="huruf-utama">ق</div><div class="huruf-latin">Qo</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ka'); ?>"><div class="huruf-card warna-22"><div class="huruf-utama">ك</div><div class="huruf-latin">Ka</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/La'); ?>"><div class="huruf-card warna-23"><div class="huruf-utama">ل</div><div class="huruf-latin">La</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ma'); ?>"><div class="huruf-card warna-24"><div class="huruf-utama">م</div><div class="huruf-latin">Ma</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Na'); ?>"><div class="huruf-card warna-25"><div class="huruf-utama">ن</div><div class="huruf-latin">Na</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Wa'); ?>"><div class="huruf-card warna-26"><div class="huruf-utama">و</div><div class="huruf-latin">Wa</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/HA'); ?>"><div class="huruf-card warna-27"><div class="huruf-utama">ه</div><div class="huruf-latin">HA</div></div></a>
            <a class="huruf-link" href="<?php echo site_url('fathah/detail/Ya'); ?>"><div class="huruf-card warna-28"><div class="huruf-utama">ي</div><div class="huruf-latin">Ya</div></div></a>
        </div>
    </div>
</body>
</html> 