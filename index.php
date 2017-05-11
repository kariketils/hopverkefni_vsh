<?php include("mysql_connect.php") ?>

<!DOCTYPE html>
<html>
<head>
  <title>"hopverkefni"</title>

  <link rel="auka.css">
</head>
<body id="frm">
   <div class="container">
  <div class="row">

    <div class="col-sm-8">
    <?php 
    @$opt=$_GET['option'];
    
    if($opt!="")
    {
      if($opt=="about")
      {
      include('about.php');
      }
      else if($opt=="contact")
      {
      include('contact.php');
      }
      
      else if($opt=="New_user")
      {
      include('registration.php');
      }
      
      
      else if($opt=="login")
      {
      include('demo.php');
      }
    }
    else
    {
    echo "<h2></h2>
    Welcome 
    Welcome user Welcome user Welcome user Welcome user Welcome user Welcome user user 
        Welcome 
    Welcome user Welcome user Welcome user Welcome user Welcome user Welcome user user";
    }
    include("timit.php");
    ?>
    
    
    
    
    </div>
    <br />
    <br />
    <br />
    <br />


    
</body>
</html>
