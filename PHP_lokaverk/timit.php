<?php

  date_default_timezone_set('Europe/London');
  
  function show_date(){
    return date('l, jS F H:i');
  }
  function greeting(){
    $hour = date('H');
    if($hour < 12){
      $greeting = "góðan morgun!";
    }
    else{
      $greeting = "góðan dag!";
    }
    return $greeting;
  }
  echo show_date();
  echo "<br/>" . greeting();
?>