<?php
	include("ayar.php");
	
	$bul = $_GET["bul"];
	
	$veri = $vt->prepare("select * from insaatlar where sehir=?");
	$veri->execute(array($bul));
	
	while($row = $veri->fetch(PDO::FETCH_ASSOC)){
		echo "<font size='5'><a href='sayfa.php?id=".$row["id"]."'>".$row["isim"]."</a></font><hr>";
	}
?>