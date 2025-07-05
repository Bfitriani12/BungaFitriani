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
            font-size: 2.2em;
            letter-spacing: 1px;
            font-weight: bold;
            box-shadow: 0 2px 12px #a78bfa44;
        }
        .container {
            width: 96%;
            margin: 36px auto 0 auto;
            max-width: 800px;
        }
        .card {
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 8px 32px rgba(162,89,255,0.10);
            padding: 44px 36px 36px 36px;
            text-align: left;
            border: 3px solid #fff;
            margin-top: 36px;
        }
        .tajwid-title {
            font-size: 2em;
            color: #a259ff;
            font-weight: bold;
            margin-bottom: 18px;
            text-align: center;
        }
        .tajwid-desc {
            color: #555;
            font-size: 1.15em;
            margin-bottom: 28px;
            text-align: center;
        }
        .section-title {
            color: #a259ff;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 28px;
            margin-bottom: 10px;
        }
        .mad-list {
            margin-left: 18px;
            margin-bottom: 18px;
        }
        .mad-list li {
            margin-bottom: 8px;
            font-size: 1.08em;
        }
        .example-box {
            background: #f3e8ff;
            border-left: 5px solid #a259ff;
            border-radius: 10px;
            padding: 16px 22px;
            margin: 18px 0 28px 0;
            color: #333;
            font-size: 1.08em;
        }
        .back-btn {
            background: linear-gradient(90deg, #a259ff 60%, #6ee7b7 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 14px 32px;
            font-weight: bold;
            font-size: 1.08em;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
            text-decoration: none;
            box-shadow: 0 2px 8px #a78bfa33;
            display: block;
            margin: 0 auto;
            text-align: center;
            width: max-content;
        }
        .back-btn:hover {
            background: linear-gradient(90deg, #6ee7b7 0%, #a259ff 100%);
            transform: scale(1.04);
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Detail Materi Tajwid</div>
    <div class="container">
        <div class="card">
            <?php if (isset($tajwid['slug']) && $tajwid['slug'] === 'mad'): ?>
                <div class="tajwid-title">Bacaan Mad</div>
                <div class="tajwid-desc">Mad adalah memanjangkan suara pada huruf hijaiyah tertentu karena sebab tertentu. Mad terjadi jika ada huruf mad (ا, و, ي) yang didahului harakat yang sesuai, atau karena bertemu hamzah/sukun. Panjang mad bisa 2, 4, atau 6 harakat tergantung jenisnya.</div>
                <div class="section-title">Huruf Mad</div>
                <ul class="mad-list">
                    <li><b>Alif (ا)</b> didahului harakat fathah</li>
                    <li><b>Waw (و)</b> didahului harakat dhammah</li>
                    <li><b>Ya (ي)</b> didahului harakat kasrah</li>
                </ul>
                <div class="section-title">Jenis-Jenis Mad</div>
                <ul class="mad-list">
                    <li><b>Mad Thabi'i (Mad Asli)</b>: Mad dasar, dipanjangkan 2 harakat.<br>
                        <span class="example-box">Contoh: قَالَ (qaala), قِيلَ (qiila), يَقُولُ (yaquulu)</span>
                    </li>
                    <li><b>Mad Wajib Muttashil</b>: Mad bertemu hamzah dalam satu kata, dipanjangkan 4-5 harakat.<br>
                        <span class="example-box">Contoh: جَاءَ (jaa-a), سُوءٌ (suu-un)</span>
                    </li>
                    <li><b>Mad Jaiz Munfashil</b>: Mad bertemu hamzah di kata berbeda, dipanjangkan 4-5 harakat.<br>
                        <span class="example-box">Contoh: فِي &nbsp; أَنْفُسِكُمْ (fii anfusikum)</span>
                    </li>
                    <li><b>Mad Aridh Lissukun</b>: Mad bertemu huruf sukun karena waqaf (berhenti), dipanjangkan 2, 4, atau 6 harakat.<br>
                        <span class="example-box">Contoh: الْعَالَمِينَ (al-'aalamiin) saat waqaf</span>
                    </li>
                    <li><b>Mad Iwadh</b>: Mad pengganti tanwin fathah di akhir kalimat, dipanjangkan 2 harakat.<br>
                        <span class="example-box">Contoh: هُدًى (hudan) dibaca huda</span>
                    </li>
                    <li><b>Mad Badal</b>: Mad yang didahului hamzah, dipanjangkan 2 harakat.<br>
                        <span class="example-box">Contoh: آمَنَ (aamana), إِيمَانٍ (iimaanin)</span>
                    </li>
                </ul>
                <div class="section-title">Catatan</div>
                <div class="example-box">Panjang mad diukur dengan harakat (gerakan jari atau ketukan). Bacaan mad harus jelas, tidak dipercepat, dan sesuai kaidah tajwid.</div>
            <?php elseif (isset($tajwid['slug']) && $tajwid['slug'] === 'ghunnah'): ?>
                <div class="tajwid-title">Ghunnah</div>
                <div class="tajwid-desc">Ghunnah adalah suara dengung yang keluar dari rongga hidung saat membaca huruf tertentu dalam Al-Qur'an. Ghunnah terjadi pada huruf <b>ن</b> (nun) dan <b>م</b> (mim) bertasydid, serta pada beberapa hukum tajwid seperti idgham, ikhfa, dan iqlab.</div>
                <div class="section-title">Ciri-ciri Ghunnah</div>
                <ul class="mad-list">
                    <li>Suara dengung terdengar jelas dari hidung</li>
                    <li>Biasanya berlangsung 2 harakat (dua ketukan)</li>
                    <li>Terjadi pada huruf <b>نّ</b> (nun tasydid) dan <b>مّ</b> (mim tasydid)</li>
                    <li>Juga muncul pada hukum Idgham Bighunnah, Ikhfa', dan Iqlab</li>
                </ul>
                <div class="section-title">Contoh Bacaan Ghunnah</div>
                <ul class="mad-list">
                    <li><b>Idgham Bighunnah:</b> مَنْ يَقُولُ dibaca "manny-aquulu" (dengung pada "nny")</li>
                    <li><b>Ikhfa:</b> أَنْفُسِكُمْ dibaca "anfu..." (dengung pada "n")</li>
                    <li><b>Iqlab:</b> أَنْبَتَ dibaca "ambata" (dengung pada "m")</li>
                    <li><b>Nun/Mim Tasydid:</b> إِنَّ dibaca "inna" (dengung pada "nn")</li>
                    <li><b>سَمِيعٌ مَّبْصِيرٌ</b> (dengung pada "mm")</li>
                </ul>
                <div class="section-title">Catatan</div>
                <div class="example-box">Ghunnah harus dibaca dengan jelas dan tidak dipercepat. Dengung dilakukan dari rongga hidung, bukan dari mulut.</div>
            <?php elseif (isset($tajwid['slug']) && $tajwid['slug'] === 'idgham'): ?>
                <div class="tajwid-title">Idgham</div>
                <div class="tajwid-desc">Idgham adalah hukum tajwid yang berarti "meleburkan" atau "menggabungkan" satu huruf ke huruf berikutnya sehingga dibaca seolah-olah menjadi satu huruf. Dalam Al-Qur'an, idgham terjadi ketika nun sukun (نْ) atau tanwin (ــًــٍــٌ) bertemu dengan salah satu huruf idgham.</div>
                <div class="section-title">Huruf Idgham</div>
                <ul class="mad-list">
                    <li>ي (Ya)</li>
                    <li>ر (Ra)</li>
                    <li>م (Mim)</li>
                    <li>ل (Lam)</li>
                    <li>و (Waw)</li>
                    <li>ن (Nun)</li>
                </ul>
                <div class="section-title">Jenis-Jenis Idgham</div>
                <ul class="mad-list">
                    <li><b>Idgham Bighunnah</b> (dengan dengung): jika bertemu ي, ن, م, و. Dibaca dengan dengung (ghunnah) 2 harakat.<br>
                        <span class="example-box">Contoh: مَنْ يَقُولُ dibaca "manny-aquulu"</span>
                    </li>
                    <li><b>Idgham Bilaghunnah</b> (tanpa dengung): jika bertemu ل, ر. Dibaca tanpa dengung.<br>
                        <span class="example-box">Contoh: مِنْ رَبِّهِمْ dibaca "mir-rabbihim"</span>
                    </li>
                </ul>
                <div class="section-title">Contoh Bacaan Idgham</div>
                <ul class="mad-list">
                    <li>مَنْ يَعْمَلْ → dibaca "mayya'mal" (idgham bighunnah)</li>
                    <li>مِنْ لَدُنْ → dibaca "mil-ladun" (idgham bilaghunnah)</li>
                    <li>سَمِيعٌ نَصِيرٌ → dibaca "sami'un-nasiir" (idgham bighunnah)</li>
                    <li>مِنْ رَبِّهِمْ → dibaca "mir-rabbihim" (idgham bilaghunnah)</li>
                </ul>
                <div class="section-title">Catatan</div>
                <div class="example-box">Idgham harus dibaca dengan jelas, baik dengan atau tanpa dengung sesuai jenisnya. Perhatikan panjang dengung (ghunnah) jika idgham bighunnah.</div>
            <?php endif; ?>
            <a href="<?php echo site_url('tajwid'); ?>" class="back-btn">Kembali ke Daftar Tajwid</a>
        </div>
    </div>
</body>
</html> 