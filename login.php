<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carshow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    include_once("config/connection.php");
?>
<section>
    <div class="boxLogin" id="login">
        <form method="post">
            <div class="box2 bg-secondary my-2 pb-3" >
            <button  onclick="closeLogin()" class="crossbtn"><i class="fa-regular fa-circle-xmark"></i></button>
            <h1 class="h2 mb-3 fw-bold">Please Login in</h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" name="email" value="">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" name="password" value="">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me <a href="#" class="text-danger">Forgot Password</a>
              </label>
            </div>
            <input id="btn"  type="submit" name="submit" value="Login">
            <div class="signup">
            <p>Don't Have An Account? </p><span><button onclick="closeLogin()">Sign Up</button></span>
            </div>
            

          </form>
        </div>
    </div>
    <div class="register" id="register">
        <button  onclick="closeRegister()" class="btn text-white"><i class="fa-regular fa-circle-xmark"></i></button>
        <form method="post" action="reg.php" enctype="multipart/form-data">
            <div class="box1  my-2 pb-3" >
            <h1 class="h2 mb-3 fw-bold">Sign Up to carshow</h1>
            <p class="fw-semibold text-white">This is necessary to personalisation result to you</p>
            <div class="form-floating">
              <input type="name" class="form-control" id="floatingInput" name="name">
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" name="email">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="mobile" class="form-control" id="floatingPassword" name="mobile">
              <label for="floatingPassword">Mobile</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" name="password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
              <input type="file" class="form-control" id="floatingFile" name="profile_image">
              <label for="floatingFile">Profile_image</label>
            </div>
            <input  class="btn btn-danger" type="submit" name="submit" value="Sign Up">
            <div class="logindiv">
            <p class="text-white">Already have an account?</p><span><button onclick="closeRegister()">Login</button></span>
            </div>

          </form>
     </div>

</section>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>