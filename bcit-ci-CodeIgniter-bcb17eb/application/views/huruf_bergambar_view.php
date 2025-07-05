<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Huruf Bergambar dan Mendengarkan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .judul {
            text-align: center;
            font-size: 2.2em;
            color: #a259ff;
            margin-top: 32px;
            margin-bottom: 18px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .huruf-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 32px;
            margin: 0 auto 40px auto;
            max-width: 1100px;
        }
        .huruf-card {
            background: #fff;
            border-radius: 28px;
            box-shadow: 0 4px 24px 0 #a259ff22;
            width: 220px;
            padding: 24px 18px 18px 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
        }
        .huruf-card:hover {
            transform: scale(1.04) translateY(-4px);
            box-shadow: 0 12px 32px 0 #a259ff33;
        }
        .huruf-arab {
            font-size: 2.8em;
            color: #ff6b9d;
            margin-bottom: 8px;
            font-family: 'Amiri', serif;
        }
        .huruf-gambar {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 10px;
            border-radius: 16px;
            background: #f8f9ff;
            box-shadow: 0 2px 8px #a259ff11;
        }
        .huruf-latin {
            font-size: 1.3em;
            color: #38bdf8;
            margin-bottom: 4px;
            font-weight: 600;
        }
        .huruf-objek-arab {
            font-size: 1.1em;
            color: #a259ff;
            margin-bottom: 2px;
            font-family: 'Amiri', serif;
        }
        .huruf-objek-latin {
            font-size: 1em;
            color: #666;
            margin-bottom: 8px;
        }
        .btn-audio {
            background: linear-gradient(90deg, #a259ff 60%, #ff6b9d 100%);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            cursor: pointer;
            box-shadow: 0 2px 8px #a259ff22;
            transition: background 0.2s, transform 0.2s;
        }
        .btn-audio:hover {
            background: linear-gradient(90deg, #ff6b9d 60%, #a259ff 100%);
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="judul">Huruf Bergambar dan Mendengarkan</div>
    <div class="huruf-grid">
        <?php foreach($huruf_bergambar as $h): ?>
            <div class="huruf-card">
                <div class="huruf-arab"><?php echo $h['huruf_arab']; ?></div>
                <img class="huruf-gambar" src="<?php echo $h['gambar']; ?>" alt="<?php echo $h['objek_latin']; ?>">
                <div class="huruf-latin"><?php echo $h['huruf_latin']; ?></div>
                <div class="huruf-objek-arab"><?php echo $h['objek_arab']; ?></div>
                <div class="huruf-objek-latin"><?php echo $h['objek_latin']; ?></div>
                <button class="btn-audio" onclick="document.getElementById('audio_<?php echo $h['huruf_arab']; ?>').play()">
                    <i class="fa-solid fa-volume-up"></i>
                </button>
                <audio id="audio_<?php echo $h['huruf_arab']; ?>" src="<?php echo $h['audio']; ?>"></audio>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html> 