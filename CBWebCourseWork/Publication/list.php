<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  // Checks if a new publication has been submitted and writes to result.txt
  if(!empty($_POST)) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $school = $_POST['school-name'];
    $journal = $_POST['journal'];
    $doi = $_POST['doi'];

    $file = 'result.txt';
    $current = file_get_contents($file);
    $current .= $_POST['title'] . ","  . $_POST['author']. ","  .$_POST['year']. ","  .$_POST['school-name']. ","  .$_POST['journal']. ","  .$_POST['doi']."\n";
    file_put_contents($file, $current); 
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Publication List</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/778b64c721.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="list.css">

    <!-- Ajax -->
    <script type=text/javascript src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>

    </script>
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

  <div class="content-wrapper">

    <h1 id="title">Publications:</h1><hr/>
    <div class="pubs">
    <?php
      $handle = fopen("result.txt", "r");
      while (($buffer = fgets($handle, 4096)) !== false) {
        $name=explode(',',$buffer)[0];
      ?><a href="display.php?name=<?=$name?>"><?=$name?></a><br/>
  
    <?php
        }
        fclose($handle);
    ?>
    </div>
    <?php
    // If user is admin, shows link to return to submit.php
    if(isset($_SESSION['loggedin'])) {
      if($_SESSION['admin']==1) {
        ?><html></br><hr/><a href="submit.php" id="sub-link">Submit New Publication</a><?php
      }
    } else {
      ?><html></br><hr/><a href="../Login/session.php" id="sub-link">Login to submit Publication</a><?php
    }
    ?>
  </div>
</body>
</html>