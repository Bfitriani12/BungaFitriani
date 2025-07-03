<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; }
        .signup-box { width: 350px; margin: 80px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        .signup-box h2 { text-align: center; margin-bottom: 20px; }
        .signup-box label { display: block; margin-bottom: 5px; }
        .signup-box input[type="text"], .signup-box input[type="password"] { width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; }
        .signup-box button { width: 100%; padding: 10px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        .signup-box .login-btn { background: #6c757d; margin-top: 10px; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
        .success { color: green; text-align: center; margin-bottom: 10px; }
    </style>
    <script>
        function validateForm() {
            var pass = document.getElementById('password').value;
            var conf = document.getElementById('confirm').value;
            if(pass !== conf) {
                alert('Password dan konfirmasi password tidak sama!');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="signup-box">
        <h2>Sign Up</h2>
        <?php if(isset($error)) echo '<div class="error">'.$error.'</div>'; ?>
        <?php if(isset($success)) echo '<div class="success">'.$success.'</div>'; ?>
        <form method="post" action="<?php echo site_url('signup/proses'); ?>" onsubmit="return validateForm();">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm">Konfirmasi Password</label>
            <input type="password" id="confirm" name="confirm" required>
            <button type="submit">Sign Up</button>
        </form>
        <form action="<?php echo site_url('login'); ?>">
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html> 