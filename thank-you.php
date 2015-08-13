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
				<li><a>Realizar Pago</a></li>
				<li class="active"><a>Fin</a></li>
			</ol>
		</div>
		
		<div class="container text-center">
			
			<div class="col-sm-12 text-center">
				<h1>Thank you!</h1>
				<h2>Su pedido ha sido procesado</h2>
			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){
				sendend("<?=$_POST['iva']?>", "<?=$_POST['tipoIva']?>", "<?=$_POST['pais']?>", Math.floor((Math.random() * 1000) + 1)); // Número factura aleatorio
			});
		</script>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>

	</body>
</html>