<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
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
				<li class="active"><a href="/">Verificar Carrito</a></li>
				<li><a>Realizar Pago</a></li>
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
						<span class="price">600.000.000 €</span>
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">Escafandra Interestelar</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">999,99 €</span>				
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">AP WiFi (Modelo especial UPM)</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">GRATIS</span>
					</li>
				</ul>
			</div>





			<div class="col-md-6 col-sm-12">
				<h1>Sus Datos de Facturación:</h1>

				<form  action="payment-gateway.php" method="post">
					<div class="form-group">
						<label for="calle" class="col-sm-2 control-label">Calle</label>
						<div class="col-sm-10">
							<input type="calle" class="form-control" id="calle" placeholder="Calle">
						</div>
					</div>

					<div class="form-group">
						<label for="cp" class="col-sm-2 control-label">C.P.</label>
						<div class="col-sm-10">
							<input type="cp" class="form-control" id="cp" placeholder="Código Postal">
						</div>
					</div>

					<div class="form-group">
						<label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
						<div class="col-sm-10">
							<input type="ciudad" class="form-control" id="ciudad" placeholder="Ciudad">
						</div>
					</div>

					<div class="form-group">
						<label for="pais" class="col-sm-2 control-label">País</label>
					  <div class="col-sm-10">
						  <select class="form-control" name="pais" id="pais">
								<option value="Austria">Austria</option>
								<option value="Belgium">Belgium</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Croatia">Croatia</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Estonia">Estonia</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="Germany">Germany</option>
								<option value="Greece">Greece</option>
								<option value="Hungary">Hungary</option>
								<option value="Ireland">Ireland</option>
								<option value="Italy">Italy</option>
								<option value="Latvia">Latvia</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Malta">Malta</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Romania">Romania</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option selected="selected" value="Spain">Spain</option>
								<option value="Sweden">Sweden</option>
								<option value="United Kingdom">United Kingdom</option>
						  </select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-2 offset-2"></div>
						<div class="col-sm-10">
							<input type='submit' class="btn btn-block btn-primary" id='go_shopping' value='Realizar Pago'>
						</div>
					</div>
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