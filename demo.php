<?php 
    include_once("mysql_connect.php")
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);



    $result = mysql_query("select * from notandi where Username = '$username' and Password = '$password'")or die("Failed to query database" . mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) {
      echo "innskráning tókst". $row['username'];
    }
    else{
      echo "virkaði ekki";
    }
 ?>


