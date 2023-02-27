<?php
session_start();
if(!isset($_SESSION['loggedin'])) header("Location: ../Login/session.php");
if($_SESSION['loggedin']===FALSE) header("Location: ../Login/session.php");
if($_SESSION['admin']===0) header("Location: ../Login/session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/778b64c721.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="submit.css">

</head>
<body>

  <!-- Navagation Bar -->
  <div class="navbar">
      <a class="left"href="submit.php"><i class="fa-solid fa-book"></i> My Publication Page</a>
      <a href="../Login/session.php"><i class="fa-solid fa-user"></i> Login</a>
      <a href="../Weather/weather.html"><i class="fa-solid fa-cloud-sun"></i></i> Weather</a>
      <a href="../CV/CV.html"><i class="fa-solid fa-pen-to-square"></i> CV</a>
      <a href="../Homepage/index.html"><i class="fa-solid fa-house"></i> Homepage</a>
  </div>

  <div class="wrapper">

    <header>
        <h1>Publication</h1>
        <p>
            this is the publication submission page.
        </p>
    </header>

    <div class="content-container">
        <form action="list.php" method="POST">
            <div class="textbox">
                <label for="title">Title: </label>
                <input type="text" name="title" required="true">
            </div>
            <div class="textbox">
                <label for="author">Author: </label>
                <input type="text" name="author" required="true">
            </div>
            <div class="textbox">
                <label for="year">Year: </label>
                <input type="date" name="year" min="1900-01-01" required="true">
            </div>
            <div class="textbox">
                <label for="school-name">School Name: </label>
                <input type="text" name="school-name" required="true">
            </div>
            <div class="textbox">
                <label for="journal">Journal: </label>
                <input type="text" name="journal" required="true">
            </div>
            <div class="textbox">
                <label for="doi">DOI: </label>
                <input type="text" name="doi" required="true">
            </div>
            <div class="btn">
                <input type="submit" value="Submit" id="btn">
            </div>
        </form>

        <div class="view">
            <a href="list.php">View List</a>
        </div>
    </div>

  </div>
    
</body>
</html>