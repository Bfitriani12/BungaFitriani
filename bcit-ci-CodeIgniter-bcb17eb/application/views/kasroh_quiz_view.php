<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #38bdf8 100%);
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
            backdrop-filter: blur(10px);
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
        }
        .quiz-card {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 2px solid #bae6fd;
        }
        .question {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .huruf-display {
            font-size: 4em;
            color: #2563eb;
            margin: 20px 0;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 30px 0;
        }
        .option-btn {
            background: rgba(56, 189, 248, 0.1);
            border: 2px solid #2563eb;
            color: #2563eb;
            padding: 20px;
            border-radius: 15px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .option-btn:hover {
            background: rgba(56, 189, 248, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .option-btn.correct {
            background: #38bdf8;
            color: white;
            border-color: #38bdf8;
        }
        .option-btn.incorrect {
            background: #f44336;
            color: white;
            border-color: #f44336;
        }
        .navigation {
            margin-top: 30px;
            text-align: center;
        }
        .nav-btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 20px;
            margin: 0 10px;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid #bae6fd;
            transition: all 0.3s ease;
        }
        .nav-btn:hover {
            background: #38bdf8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid #bae6fd;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            background: #38bdf8;
            transform: translateX(-5px);
        }
        .score {
            background: linear-gradient(45deg, #38bdf8, #2563eb);
            color: white;
            padding: 15px;
            border-radius: 15px;
            margin: 20px 0;
            font-size: 1.2em;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .options {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="<?php echo site_url('kasroh'); ?>" class="back-btn">← Kembali</a>
    <div class="header"><?php echo $title; ?></div>
    <div class="container">
        <div class="quiz-card">
            <div class="score">Skor: <span id="score">0</span> / <span id="total"><?php echo count($questions); ?></span></div>
            <div id="quiz-container">
                <?php foreach($questions as $index => $question): ?>
                <div class="question-item" data-question="<?php echo $index; ?>" style="<?php echo $index > 0 ? 'display: none;' : ''; ?>">
                    <div class="question"><?php echo $question['question']; ?></div>
                    <div class="huruf-display"><?php echo $question['huruf_arabic'] ?? 'ا'; ?></div>
                    <div class="options">
                        <?php foreach($question['options'] as $option): ?>
                        <button class="option-btn" data-answer="<?php echo $option; ?>" data-correct="<?php echo $question['correct_answer']; ?>">
                            <?php echo $option; ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="navigation">
                <a href="<?php echo site_url('kasroh'); ?>" class="nav-btn">🏠 Semua Huruf</a>
                <a href="<?php echo site_url('kasroh/practice'); ?>" class="nav-btn">📝 Latihan</a>
                <button onclick="restartQuiz()" class="nav-btn" style="background: #38bdf8;">🔄 Mulai Ulang</button>
            </div>
        </div>
    </div>
    <script>
        let currentQuestion = 0;
        let score = 0;
        const totalQuestions = <?php echo count($questions); ?>;
        document.querySelectorAll('.option-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const isCorrect = this.dataset.answer === this.dataset.correct;
                if (isCorrect) {
                    score++;
                    this.classList.add('correct');
                } else {
                    this.classList.add('incorrect');
                    document.querySelectorAll('.option-btn').forEach(option => {
                        if (option.dataset.answer === this.dataset.correct) {
                            option.classList.add('correct');
                        }
                    });
                }
                document.getElementById('score').textContent = score;
                document.querySelectorAll('.option-btn').forEach(option => {
                    option.disabled = true;
                });
                setTimeout(() => {
                    if (currentQuestion < totalQuestions - 1) {
                        currentQuestion++;
                        showQuestion(currentQuestion);
                    } else {
                        showResults();
                    }
                }, 2000);
            });
        });
        function showQuestion(index) {
            document.querySelectorAll('.question-item').forEach((item, i) => {
                item.style.display = i === index ? 'block' : 'none';
            });
            document.querySelectorAll('.option-btn').forEach(btn => {
                btn.classList.remove('correct', 'incorrect');
                btn.disabled = false;
            });
        }
        function showResults() {
            const container = document.getElementById('quiz-container');
            container.innerHTML = `
                <div style="text-align: center;">
                    <h2>Quiz Selesai!</h2>
                    <div class="score">Skor Akhir: ${score} / ${totalQuestions}</div>
                    <p style="font-size: 1.2em; margin: 20px 0;">
                        ${score === totalQuestions ? '🎉 Sempurna! Kamu sudah menguasai Kasroh!' : 
                          score >= totalQuestions * 0.8 ? '👍 Bagus! Kamu hampir menguasai Kasroh!' :
                          '📚 Terus belajar ya! Kamu bisa lebih baik lagi!'}
                    </p>
                </div>
            `;
        }
        function restartQuiz() {
            location.reload();
        }
    </script>
</body>
</html> 