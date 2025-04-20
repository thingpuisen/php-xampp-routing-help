<?php 
  require "views/partials/head.php";
?>
<style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      background: #f9f9f9;
    }
    .login-container {
      max-width: 320px;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      background-color: #fff;
    }
    form > input[type="submit"] {
      margin-top: 1rem;
    }
    h2 {
      text-align: center;
      margin-bottom: 1rem;
    }
  </style>
<body>

  <div class="login-container">
    <h2>Admin Login</h2>
    <form action="#" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>

      <input type="submit" value="Login">
      <p>
        Login as student? <a href="/student-login">Click here</a>
      </p>
    </form>
  </div>

</body>
</html>
