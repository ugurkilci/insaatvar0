<?php readfile("header.php");?>
<?php
	include("ayar.php");
	
	if($_POST){
		$isim = $_POST["isim"];
		$olay = $_POST["olay"];
		$sehir = $_POST["sehir"];
		$adres = $_POST["adres"];
		
		$veri = $vt->prepare("insert into insaatlar set isim=?, olay=?, sehir=?, adres=?");
		$veri->execute(array($isim,$olay,$sehir,$adres));
		
		if($veri){
			echo ":)";
			header("refresh: 2; url=ekle.php");
		}else{
			echo ":(";
			header("refresh: 2; url=ekle.php");
		}
	}
?>

<form action="" method="POST">
	<input type="text" name="isim" placeholder="�sim"/><br>
	<textarea name="olay" placeholder="olay"></textarea><br>
	<select name="sehir">
		<option>�stanbul</option>
		<option>�zmir</option>
		<option>Ankara</option>
		<option>Ayd�n</option>
	</select><br>
	<textarea name="adres" placeholder="adres" ></textarea><br>
	<input type="submit" value="G�nder" /><br>
</form>