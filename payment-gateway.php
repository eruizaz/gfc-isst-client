<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/gestor-facturas.js"></script>
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="/">Your online store</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="/">Verificar Carrito</a></li>
				<li class="active"><a>Realizar Pago</a></li>
				<li><a>Fin</a></li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-6 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">Súper Cohete Espacial</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">1000.00 €</span>
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">Escafandra Interestelar</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">10.00 €</span>				
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">AP WiFi (Modelo especial UPM)</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">0.00 €</span>
					</li>

					<li class="row">
						<span class="quantity"></span>
						<span class="itemName">IVA <span class="IVArateInsert">...</span>%</span>
						<span class="popbtn"></span>
						<span class="price"><span class="IVAinsert">...</span> €</span>
					</li>

					<li class="row">
						<span class="quantity"></span>
						<span class="itemName">TOTAL (IVA incl.)</span>
						<span class="popbtn"></span>
						<span class="price"><span class="totalInsert">...</span> €</span>
					</li>
				</ul>
				
				<script type="text/javascript">
					$(document).ready(function(){
						getIVA("<?=$_POST['pais']?>", 1010);
					});
				</script>

			</div>

			<div class="col-md-6 col-sm-12">
				<h1>Realice su pago</h1>

				<form id="to-thank-you" action="thank-you.php" method="post">
					<input type="hidden" id="iva"     name="iva"      value="">
					<input type="hidden" id="tipoIva" name="tipoIva"  value="">
					<input type="hidden" id="pais"    name="pais"     value="">

					<input type="submit" class="btn btn-block btn-lg btn-primary" href="/thank-you.php" value="Tarjeta"><br>
					<input type="submit" class="btn btn-block btn-lg btn-primary" href="/thank-you.php" value="PayPal">
				</form>

			</div>

		</div>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>

	</body>
</html>