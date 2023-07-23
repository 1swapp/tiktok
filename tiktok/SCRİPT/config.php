<?php//MADE BY MEHMET ALİ ALBAYRAK
header('Content-Type: text/html; charset=utf-8');
$dbKullanici = 'SS';
$dbName = 'SS';
$dbPassword = 'PASS';

try {
	$db = new PDO("mysql:host=localhost;dbname=$dbName", "$dbKullanici", "$dbPassword",array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8",PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"));
		$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
 

} catch ( PDOException $e ){
	print $e->getMessage(); 
}
