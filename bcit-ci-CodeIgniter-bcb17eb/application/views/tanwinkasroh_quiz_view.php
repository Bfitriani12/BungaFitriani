<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #eff6ff 0%, #60a5fa 100%);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: #2563eb;
            color: #fff;
            padding: 25px 0;
            text-align: center;
            font-size: 2.2em;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #60a5fa;
        }
        .container {
            width: 90%;
            margin: 30px auto;
            max-width: 800px;
        }
        .nav-buttons {
            text-align: center;
            margin-bottom: 30px;
        }
        .nav-btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            margin: 0 10px;
            font-weight: bold;
        }
        .nav-btn:hover {
            background: #60a5fa;
        }
        .quiz-container {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 20px auto;
        }
        .question {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 10px;
        }
        .option {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            font-size: 1em;
            font-weight: bold;
            min-width: 100px;
        }
        .answer {
            color: #2563eb;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .quiz-number {
            color: #2563eb;
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Quiz Tanwin Kasroh</div>
    <div class="container">
        <div class="nav-buttons">
            <a href="<?php echo site_url('tanwinkasroh'); ?>" class="nav-btn">Kembali ke Tanwin Kasroh</a>
            <a href="<?php echo site_url('dashboard'); ?>" class="nav-btn" style="background:#a259ff;">Dashboard</a>
        </div>
        <div class="quiz-container">
            <?php if(isset($questions) && is_array($questions)): ?>
                <?php foreach($questions as $i => $q): ?>
                    <div class="quiz-number">Soal <?php echo $i+1; ?></div>
                    <div class="question"><?php echo $q['question']; ?></div>
                    <div class="options">
                        <?php foreach($q['options'] as $opt): ?>
                            <div class="option"><?php echo $opt; ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="answer">Jawaban Benar: <?php echo $q['correct_answer']; ?></div>
                    <hr style="margin: 25px 0; border: 1px solid #60a5fa;">
                <?php endforeach; ?>
            <?php else: ?>
                <div>Tidak ada soal quiz.</div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html> 