<?php
try{
$source = 'mysql:host=tsuts.tskoli.is;dbname=phplokaverk';
$user = '2603982459';
$password = 'mypassword';


$pdo = new PDO($source, $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERROR_EXCEPTION);

$pdo->exec('SET NAMES "utf8"');
}

catch (PDOException $e){
	echo "Tenging tókst því miður ekki.";

}
?>