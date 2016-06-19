<html>
	<head>
		<!-- Baþlýk baþla -->
		<title>&Iacute;n&#351;aat Var!</title>
		<!-- Baþlýk bitir -->
		
		<!-- Css baþla -->
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="css/genel.css"/>
		<!-- Css bitir -->
		
		<!-- Meta baþla -->
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
				<font size="10">Gir ve yakýndaki inþaatlara bul, git doya doya izle.</font>
					<?php 
						if($_POST){
							$sehir = $_POST["sehir"];
							
							header("refresh: 2; url=sirala.php?bul=$sehir");
							echo "Bulunuyor. Azýcýk sabýr. :)";
						}
					?>
					
					<form action="" method="POST">
						<select name="sehir" class="form-control">
							<option>Ýstanbul</option>
							<option>Ýzmir</option>
							<option>Ankara</option>
							<option>Aydýn</option>
						</select>
						<input type="submit" value="Bul" class="form-control btn btn-primary"/><br>
					</form>
			</div>
		</div>
		<?php include("footer.php");?>
	</body>
</html>