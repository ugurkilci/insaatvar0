<?php
	include("ayar.php");
	$id = $_GET["id"];
	
	$veri = $vt->prepare("select * from insaatlar where id=?");
	$veri->execute(array($id));
	$row = $veri->fetch(PDO::FETCH_ASSOC);
	
	echo $row["isim"]."<br />";
	echo $row["sehir"]."<br />";
	echo $row["adres"]."<br />";
	echo $row["olay"]."<br />";
	echo $row["hit"]."<br />";
	
?>