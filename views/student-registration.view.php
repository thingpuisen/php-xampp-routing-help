<?php
    require "partials/head.php";
?>
<body>
    <header>
        <h1 style="text-align: center;">Student registration form</h1>
    </header>
    <main class="container">
    <form action="" class="stud-reg-form" method="post">
        <label for="name"><b>Student Name</b></label><br>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br>
        <label for="dob"><b>Date Of birth</b></label><br>
        <input type="date" name="dob" id="dob" placeholder="Enter your date of birth"><br>
        <label for="mzu_id"><b>Mzu ID</b></label><br>
        <input type="text" name="mzu_id" id="mzu_id" placeholder="Enter your ID"><br>
       <div>
        <p><b>Department:</b></p>
      <input type="radio" id="ce" name="department" value="Computer Engineering" checked>
      <label for="ce">Computer Engineering</label>
      <input type="radio" id="ee" name="department" value="Electrical Engineering">
      <label for="ee">Electrical Engineering</label>
      <input type="radio" id="it" name="department" value="Information Technology">
      <label for="it">Information Technology</label>
      <input type="radio" id="ece" name="department" value="Electronics and Communication Engineering">
      <label for="ece">Electronics and Communication Engineering</label>
      <input type="radio" id="cv" name="department" value="Civil Engineering">
      <label for="cv">Civil Engineering</label>
     
      </div>
      <p></p>
    <div>
        <p><b>Semester:</b></p>
        <input type="radio" id="sem1" name="semester" value="1st Semester" checked>
        <label for="sem1">1st Semester</label>
        <input type="radio" id="sem2" name="semester" value="2nd Semester">
        <label for="sem2">2nd Semester</label>
        <input type="radio" id="sem3" name="semester" value="3rd Semester">
        <label for="sem3">3rd Semester</label>
        <input type="radio" id="sem4" name="semester" value="4th Semester">
        <label for="sem4">4th Semester</label>
        <input type="radio" id="sem5" name="semester" value="5th Semester">
        <label for="sem5">5th Semester</label>
        <input type="radio" id="sem6" name="semester" value="6th Semester">
        <label for="sem6">6th Semester</label>
        <input type="radio" id="sem7" name="semester" value="7th Semester">
        <label for="sem7">7th Semester</label>
        <input type="radio" id="sem8" name="semester" value="8th Semester">
        <label for="sem8">8th Semester</label>
        

    </div>
    <p></p>
    <div>
   <p> <label for="contact"><b>Contact</b></label>
   <input type="tel" name="contact" id="contact" placeholder="Enter your contact number" pattern="[0-9]{10}" maxlength="10" required><br>
</p>
</div>
<div>
    <p>
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br>
    </p>
</div>
<button type="submit">Register</button>
    



    </form>
    <p>
        Already have an account? <a href="/student-login">Login here</a>
    </p>
    </main>
    
</body>
</html>