<!DOCTYPE html>
<html>
<head>
    <title>Login Menu</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; }
        .login-box { width: 350px; margin: 80px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        .login-box h2 { text-align: center; margin-bottom: 20px; }
        .login-box label { display: block; margin-bottom: 5px; }
        .login-box input[type="text"], .login-box input[type="password"] { width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; }
        .login-box button { width: 100%; padding: 10px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        .login-box .home-btn { background: #6c757d; margin-top: 10px; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Menu</h2>
        <?php if(isset($error)) echo '<div class="error">'.$error.'</div>'; ?>
        <form method="post" action="<?php echo site_url('login/proses'); ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <form action="<?php echo site_url('signup'); ?>">
            <button type="submit" class="home-btn">Sign Up</button>
        </form>
        <form action="<?php echo site_url('welcome'); ?>">
            <button type="submit" class="home-btn">Home</button>
        </form>
    </div>
</body>
</html> 