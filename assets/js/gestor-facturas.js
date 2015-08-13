/* ********************************************
 * INCLUYA ESTE FICHERO EN SU PÁGINA DE COMPRA
 * No modifique ningún contenido de este fichero
 * ****************************************** */

var ipcliente    = undefined;
var datoscliente = undefined;
var serverURL    = 'http://lanjaroncola2.appspot.com';
var domain       = document.domain;


// NADA MÁS CARGAR LA PÁGINA:
$(function() {
	$.ajax({
		type: "GET",
		url: "http://ip.telize.com/",
		async: false,
		success: function (data) {
			ipcliente = data;
		}
	});
});


// Gracias al AJAX síncrono anterior ya tenemos en este punto la IP

// Para testeo:
domain = "prueba.com";


/**
 * Devuelve el tipo de IVA normal.
 */
function getIVA(country, net_price) {

	// Se hace la petición AJAX a nuestro servidor del Google App Engine, el cual nos devolverá los IVAs o los mensajes de error correspondientes
	$.ajax({
		url: serverURL,
		type: 'GET',
		data: 'domain=' + domain + "&ip=" + ipcliente + '&pais=' + country,
		jsonp: 'callback',
		jsonpCallback: 'callback',
		contentType: "application/json",
		dataType: 'jsonp',
		success: function (json) {

			// El servidor NO autoriza respuesta de IVAs, explica el por qué:
			if (json.noEsPosible) {
				$('span.IVAinsert').html("<div class='bg-danger'><b>" + json.noEsPosible + "</b></div>");

			// El servidor SÍ autoriza respuesta pero ha detectado que la ubicación no coincide:
			} else if (json.CountryCoincident == "false") {
				
				$('span.IVAinsert').html("<div class='bg-danger'><b>Sus datos de facturación no coinciden con su geolocalización</b></div>");

			// El servidor SÍ autoriza respuesta y confirma que la dirección física coincide (nos da los IVAs):
			} else {
				$('span.IVArateInsert').html(json.IVA);
				var IVAinsert = net_price * json.IVA / 100;
				$('span.IVAinsert').html(IVAinsert.toFixed(2));
				var totalInsert = net_price + IVAinsert;
				$('span.totalInsert').html(totalInsert.toFixed(2));

				$("form#to-thank-you input#iva").val(IVAinsert);
				$("form#to-thank-you input#tipoIva").val('iva');
				$("form#to-thank-you input#pais").val(country);
			}
		},
		error: function (e) { // ERROR de conexión
			console.log('ERROR: ' + e.message);
		}
	});

} // getIVA(country, net_price) { }




/**
 * Devuelve el tipo de IVA reducido.
 */
function getReducedIVA(country, net_price) {

	// Se hace la petición AJAX a nuestro servidor del Google App Engine, el cual nos devolverá los IVAs o los mensajes de error correspondientes
	$.ajax({
		url: serverURL,
		type: 'GET',
		data: 'domain=' + domain + "&ip=" + ipcliente + '&pais=' + country,
		jsonp: 'callback',
		jsonpCallback: 'callback',
		contentType: "application/json",
		dataType: 'jsonp',
		success: function (json) {

			// El servidor NO autoriza respuesta de IVAs, explica el por qué:
			if (json.noEsPosible) {
				$('span.IVAinsert').html("<div class='bg-danger'><b>" + json.noEsPosible + "</b></div>");

			// El servidor SÍ autoriza respuesta pero ha detectado que la ubicación no coincide:
			} else if (json.CountryCoincident == "false") {
				
				$('span.IVAinsert').html("<div class='bg-danger'><b>Sus datos de facturación no coinciden con su geolocalización</b></div>");

			// El servidor SÍ autoriza respuesta y confirma que la dirección física coincide (nos da los IVAs):
			} else {
				$('span.IVArateInsert').html(json.ReducedIVA);
				var IVAinsert = net_price * json.ReducedIVA / 100;
				$('span.IVAinsert').html(IVAinsert.toFixed(2));
				var totalInsert = net_price + IVAinsert;
				$('span.totalInsert').html(totalInsert.toFixed(2));

				$("form#to-thank-you input#iva").val(IVAinsert);
				$("form#to-thank-you input#tipoIva").val('reducedIva');
				$("form#to-thank-you input#pais").val(country);
			}
		},
		error: function (e) { // ERROR de conexión
			console.log('ERROR: ' + e.message);
		}
	});

} // getReducedIVA(country, net_price) { }



/**
 * Devuelve el tipo de IVA súper reducido.
 */
function getSuperReducedIVA(country, net_price) {

	// Se hace la petición AJAX a nuestro servidor del Google App Engine, el cual nos devolverá los IVAs o los mensajes de error correspondientes
	$.ajax({
		url: serverURL,
		type: 'GET',
		data: 'domain=' + domain + "&ip=" + ipcliente + '&pais=' + country,
		jsonp: 'callback',
		jsonpCallback: 'callback',
		contentType: "application/json",
		dataType: 'jsonp',
		success: function (json) {

			// El servidor NO autoriza respuesta de IVAs, explica el por qué:
			if (json.noEsPosible) {
				$('span.IVAinsert').html("<div class='bg-danger'><b>" + json.noEsPosible + "</b></div>");

			// El servidor SÍ autoriza respuesta pero ha detectado que la ubicación no coincide:
			} else if (json.CountryCoincident == "false") {
				
				$('span.IVAinsert').html("<div class='bg-danger'><b>Sus datos de facturación no coinciden con su geolocalización</b></div>");

			// El servidor SÍ autoriza respuesta y confirma que la dirección física coincide (nos da los IVAs):
			} else {
				$('span.IVArateInsert').html(json.SuperReducedIVA);
				var IVAinsert = net_price * json.SuperReducedIVA / 100;
				$('span.IVAinsert').html(IVAinsert.toFixed(2));
				var totalInsert = net_price + IVAinsert;
				$('span.totalInsert').html(totalInsert.toFixed(2));

				$("form#to-thank-you input#iva").val(IVAinsert);
				$("form#to-thank-you input#tipoIva").val('superReducedIva');
				$("form#to-thank-you input#pais").val(country);
			}
		},
		error: function (e) { // ERROR de conexión
			console.log('ERROR: ' + e.message);
		}
	});

} // getSuperReducedIVA(country, net_price) { }



/**
 *  Finaliza la compra y registra el número de factura.
 */ 
function sendend(iva, tipoIva, country, nFactura) {

	$.ajax({
		url: serverURL + '/send',
		type: 'GET',
		data: 'domain=' + domain + '&iva=' + iva + '&tipoIva=' + tipoIva + '&pais=' + country.toLowerCase() + '&nFactura=' + nFactura,
		jsonp: 'callback',
		jsonpCallback: 'callback',
		contentType: "application/json",
		dataType: 'jsonp',
		success: function (json) {
			console.log(json);
		}
	});

} // sendend(iva, tipoIva, pais, nFactura) { }
