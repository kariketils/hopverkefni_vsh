<?php 
	 $server =  "tsuts.tskoli.is/phpmyadmin/";
    $database = "2603982459_phplokaverk";
    $uid = "2603982459";
    $upass = "mypassword";

    mysqli_connect()("$server","$uid","$upass") or die("tenging virkaði ekki");
    mysql_select_db("$database") or die("enginn grunnur");

    echo "Succesfull";

 ?>