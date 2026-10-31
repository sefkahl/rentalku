<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Signup Form</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

  <!-- credits to the writter @leonam-silva-de-souza -->
  <div class="container">
    <div class="form-box login">
      <form action="proses_login.php" method="post">
        <h1>Login</h1>
        <div class="input-box">
          <input type="eamil" placeholder="email" name="eamil" required>
         <i class="fas fa-envelope"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name="password" required>
          <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="forgot-link">
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <p>or login with social platforms</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-google"></i></a>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </form>
    </div>
    <div class="toggle-box">
      <div class="toggle-panel toggle-left">
        <h1>Hello, Welcome!</h1>
        <p>Don't have an account?</p>

      </div>

      <div class="toggle-panel toggle-right">
        <h1>Welcome Back!</h1>
        <p>Already have an account?</p>
        <button class="btn login-btn">Login</button>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>