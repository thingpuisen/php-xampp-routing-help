<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Login</title>
</head>
<style>
    :root {
      font-size: 14px;
      --font-size: 0.875rem;
      --spacing: 0.75rem;
      --form-element-spacing-vertical: 0.5rem;
      --button-padding: 0.5rem 1rem;
      --block-spacing-vertical: 1rem;
    }
    .form-footer {
       display: flex;
       justify-content:space-around
    }
</style>
<body>
    <form action="" class="container">
        <h1 style="text-align: center;">Student Login</h1>
        <label for="mzu_id"><b>Mzu ID</b></label><br>
        <input type="text" name="mzu_id" id="mzu_id" placeholder="Enter your ID"><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br>
        <button type="submit">Login</button><br>
        <div class="form-footer">
        <p>Don't have an account? <a href="/student-registration">Register here</a></p>
        <p>Forgot password? <a href="/forgot-password">Reset here</a></p>
        <p><a href="/admin-login">Login as admin</a></p>
        </div>
        
    </form>
   
    
</body>
</html>