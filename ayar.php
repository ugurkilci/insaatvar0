<?php
	try{
		$vt = new PDO("mysql:host=localhost;dbname=insaatvar;charset=utf8;","root","");
	}catch(PDOExeption $ugur){
		echo $ugur->getMessage();
	}
?>
<meta charset="utf8"/>