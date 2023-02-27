<?php 
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  ?>
  <!DOCTYPE html>
  <html>
   <head>
    <title>Publication Display</title>
   </head>
   <body>
    <?php
    $requested=$_GET['name'];
    $handle = fopen("result.txt", "r");

    while (($buffer = fgets($handle, 4096)) !== false) {
      
      $details=explode(',',$buffer);
      if ($details[0]==$requested)
      {
?>
  <div class="info">
    <h1>Details for <?=$details[0]?></h1><hr/><br/>
    <strong>Title</strong>: <?=$details[0]?><br/><br/>
    <strong>Author</strong>: <?=$details[1]?><br/><br/>
    <strong>Date</strong>: <?=$details[2]?><br/><br/>
    <strong>School</strong>: <?=$details[3]?><br/><br/>
    <strong>Journal</strong>: <?=$details[4]?><br/><br/>
    <strong>DOI</strong>: <?=$details[5]?><br/><br/>
      ....
  </div>
    <hr/><br/><a href="list.php">Return to Publication List</a>
<?php
      }
    }
    fclose($handle);

   
?>

 </body>
</html>

<style>

body {
  background-color: aliceblue;
  text-align: center;
  padding: 20px;
}

</style>