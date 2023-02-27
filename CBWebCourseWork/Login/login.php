<?php
session_start();
if(isset($_SESSION['loggedin'])) header("Location: secret.php");

// Getting the data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Run through the CSV and pull in the data: 
if (($handle = fopen("users.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $users[$data[0]] = array("password"=>$data[1], "admin"=>$data[2]);
    }
    fclose($handle);
}
if ($users[$username]['admin'] == 1) {
    $_SESSION['admin'] = 1;
} else {
    $_SESSION['admin'] = 0;
}

// Check user input data against our 'database': 
if(isset($users[$username]) and $users[$username]['password'] == $password ) {
    $_SESSION['loggedin']=TRUE;
    $_SESSION['username']=$username;
    header("Location: secret.php");
}
else{
    header("Location: session.php");
}
?>
<html>
<head><link rel="stylesheet" href="login.css"></head>
</html>