<html>
	<head>
		<!-- Ba�l�k ba�la -->
		<title>&Iacute;n&#351;aat Var!</title>
		<!-- Ba�l�k bitir -->
		
		<!-- Css ba�la -->
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="css/genel.css"/>
		<!-- Css bitir -->
		
		<!-- Meta ba�la -->
		<meta charset="utf8"/>
		<!-- Meta bitir -->
	</head>
	<body>
		
		<div class="col-sm-12 bomba">
			<div class="container">
				<div class="row">
						<img src="resimler/logo.png"/>
				</div>
			</div>
		</div>
		<div class="col-sm-12 menu">
			<div class="container">
				<?php include("header.php");?>
			</div>
		</div>
		
		<div class="col-sm-12 icerik">
			<div class="container" align="center">
			<div style="margin-top: 100px;"></div>
				<font size="10">Gir ve yak�ndaki in�aatlara bul, git doya doya izle.</font>
					<?php 
						if($_POST){
							$sehir = $_POST["sehir"];
							
							header("refresh: 2; url=sirala.php?bul=$sehir");
							echo "Bulunuyor. Az�c�k sab�r. :)";
						}
					?>
					
					<form action="" method="POST">
						<select name="sehir" class="form-control">
							<option>�stanbul</option>
							<option>�zmir</option>
							<option>Ankara</option>
							<option>Ayd�n</option>
						</select>
						<input type="submit" value="Bul" class="form-control btn btn-primary"/><br>
					</form>
			</div>
		</div>
		<?php include("footer.php");?>
	</body>
</html>