<?php 
    session_start();
    if(!isset($_SESSION['loggedin'])) header("Location: session.php");
    if($_SESSION['loggedin']===FALSE) header("Location: session.php");
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Secret Area</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/778b64c721.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="login.css">
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

  <header>
    <h2>Welcome 
    <?php echo ucfirst($_SESSION['username']) ?>.</h2>
    <h2><?php
    if ($_SESSION['admin'] === 1) {
        echo "You are an Administrator.";
    } else {
        echo "You are not an Administrator.";
    }
    ?></h2>

    <div class="links">
        <ul>
            <li><?php if ($_SESSION['admin'] === 1) {
                ?><a href="../Publication/submit.php">Submit Publication</a><?php
                }?>
            </li>
            <li><a href="../Publication/list.php">View List</a></li>
        </ul>
    </div>

    <form action="logout.php" method="POST">
    <input type="submit" name="logout" value="Log out" id="btn">
    </form>
  </header>
  
 </body>
 </html>