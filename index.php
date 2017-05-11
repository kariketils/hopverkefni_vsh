<?php 

         include_once "mysql_connect.php"; 
          mysql_query("UPDATE views SET 'views' = 'views'+1 WHERE id='1'");
        $sql = mysql_query("SELECT * FROM views WHERE id='1'");
        while ($row = mysql_fetch_array($sql)) {
          $id = $row["id"];
          $pagename = $row["pagename"];
          $views = $row["views"];
}; ?>

<!DOCTYPE html>
<html>
<head>
  <title>"hopverkefni"</title>

  <link rel="auka.css">
</head>
<body id="frm">
    <div >
      <form action="demo.php" method="POST">
        <p>
          <label>Username:</label>
          <input type="text" name="user" id="user"  />
        </p>
        <p>
          <label>Password:</label>
          <input type="password" name="pass" id="pass"  />
        </p>
        <p>
            <input type="submit" id="btn" value="login"   />
        </p>
      </form>
    </div>
    <br />
    <br />
    <br />
    <br />


<h1>Það hafa = <?php print $views; ?> margir opnað/notað <?php print $pagename; ?> Síðuna</h1>
    
</body>
</html>
