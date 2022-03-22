<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | </title>
    
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="{{asset('fontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}">
<!--    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="{{asset('fontend/images/frontImg.jpg')}}" alt="">
        <div class="text">
         <div class="logo">
             <img style="height: 40px; width: 200px;" src="{{asset('fontend/images/gsplogo.jpg')}}" alt="">
         </div>
          <span class="text-1">G-PASSPORT CREATED BY</span>
          <span class="text-2">GEETA TECHNICAL HUB</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="{{asset('fontend/images/frontImg.jpg')}}" alt="">
        <div class="text">
          <div class="logo">
             <img style="height: 40px; width: 200px;" src="{{asset('fontend/images/gsplogo.jpg')}}" alt="">
         </div>
          <span class="text-1">Start your journey with  <br> G PASSPORT </span>
          <span class="text-2">Future is HERE</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Register now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Registration</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your roll" required>
              </div>
              <div class="input-box">
                <i class="fa-solid fa-phone"></i>
                <input type="text" placeholder="Enter your phone" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
