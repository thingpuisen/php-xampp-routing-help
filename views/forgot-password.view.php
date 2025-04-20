<?php require "views/partials/head.php"; ?>
  <main class="container">
    <article>
      <h2>Password Recovery</h2>
      
      <form>
        <p>Enter your Contact and we'll send you a password reset link.</p>
        
        <label for="contact">Contact number</label>
        <input 
          type="tel" 
          id="contact" 
          name="contact" 
          placeholder="Enter your contact number" 
          required
        pattern="[0-9]{10}"
        maxlength="10"
        >
        
        <button type="submit" style="width: 100%; margin-bottom: 1rem;">
          Send Reset Link
        </button>
        
        <div style="text-align: center;">
          <a href="/student-login">
            ← Back to Login
          </a>
        </div>
      </form>
    </article>
  </main>
</body>
</html>