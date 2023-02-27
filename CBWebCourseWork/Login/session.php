<?php
  session_start();
  if(isset($_SESSION['loggedin'])) header("Location: secret.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/778b64c721.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="session.css">

</head>
<body>

  <!-- Navagation Bar -->
  <div class="navbar">
      <a class="left"href="session.php"><i class="fa-solid fa-user"></i> My Login Page</a>
      <a href="../Publication/list.php"><i class="fa-solid fa-book"></i> Publication</a>
      <a href="../Weather/weather.html"><i class="fa-solid fa-cloud-sun"></i></i> Weather</a>
      <a href="../CV/CV.html"><i class="fa-solid fa-pen-to-square"></i> CV</a>
      <a href="../Homepage/index.html"><i class="fa-solid fa-house"></i> Homepage</a>
  </div>

  <div class="wrapper">

    <header>
        <h1>Login</h1>
        <p>
            this is the login page.
        </p>

    </header>

    <div class="login-container">
      <form action="login.php" method="POST" class="login-form">
        <div class="form-top">
            <div class="textbox">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" required="true">
            </div>
            <div class="textbox">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required="true">
            </div>
        </div>
        
        <div class="btn">
            <input type="submit" value="Submit" id="btn">
        </div>
      </form>
    </div>
  </div>
    
</body>
</html>