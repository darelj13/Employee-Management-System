<?php
  require("connection.php");

 ?>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
  <meta charset="utf-8">
  <title>D-Designs Employee Database</title>
</head>

<body>
  <form method="POST">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a href="" class="navbar-brand"><img src="" alt="">D-Designs</a>
  </nav>
  <div class="rect">
    <div class="left">
      <img src="images/img1.png" alt="">
    </div>
    <div class="right">
      <div class="login-div">

        <div class="logo"><img align="center" class="logo-img" src="images/profile.png" height="100" width="100"></div>
        <div class="login"><h2>LOGIN</h2></div>
        <div class="login2"><h4>Username</h4></div>
          <div class="username fields">
            <svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
            <input type="text" name="userip" placeholder="Username" autocomplete="off">
          </div>
          <div class="login2"><h4>Password</h4></div>
          <div class="password fields">
            <svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
						</svg>
            <input type="password" name="passip" placeholder="Password">
          </div>
        <button type="submit" name="submit" class="login-btn">Login</button>

      </div>

    </div>


  </div>
  </form>
  <?php
    if(isset($_POST['submit']))
      {
        $username = $_POST['userip'];
        $password = $_POST['passip'];

        $sql="SELECT * FROM admin_login WHERE admin_name='$username' AND admin_password='$password'";

        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1)
        {
          session_start();
          $_SESSION['AdminLoginId']=$username;
          header("location: dashboard.php");
        }
        else {
          echo "<script>alert('Incorrect Username/Password');</script>";
        }
      }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
