<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reservas</title>
<link type="text/css" rel="stylesheet" href="../css/font-awesome.css" />

<script>
    var rutacss1 = "../css/main.css?" + Math.random();
    document.write('<link rel="stylesheet" href="' + rutacss1 + '" type="text/css" media="screen" />'); 
</script>

<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One'
	rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah"
	rel="stylesheet">

<link href="../apple-touch-icon.png" rel="apple-touch-icon" />
<link href="../apple-touch-icon-152x152.png" rel="apple-touch-icon"
	sizes="152x152" />
<link href="../apple-touch-icon-167x167.png" rel="apple-touch-icon"
	sizes="167x167" />
<link href="../apple-touch-icon-180x180.png" rel="apple-touch-icon"
	sizes="180x180" />
<link href="../icon-hires.png" rel="icon" sizes="192x192" />
<link href="../icon-normal.png" rel="icon" sizes="128x128" />

<script src="../jquery/jquery-3.1.1.min.js"></script>
<script src="../jquery/ocultar_productos.js"></script>
<script src="../jquery/jquery_menuMoviles_desplegable.js"></script>
<script src="../jquery/jquery_anclas.js"></script>

<script>
    function validar(){
        if (document.getElementById('condiciones').checked){
        	return true;
        }
        else
        {
            alert("El formulario no puede ser enviado si no acepta el Aviso Legal y la Política de Privacidad");
            return false;
        }
    }
</script>

</head>
<body>
	<header>

		<!-- 		<div class="titulo_movil"> -->
		<!-- 			<a href='../index.php' title='Inicio'><img -->
		<!-- 				src='../img/merendalia_logotipo_RGB-01.png' alt='Merendalia' /></a> -->
		<!-- 		</div> -->

		<nav>
          <?php include_once("menuNav.php");?>		
      	</nav>
	</header>

	<div class="contenedor_reservas">

		<!-- TARIFAS -->

		<div class="tarifas">
			<!-- <img src='../img/tarifas.png' alt='Tarifa' /> -->
			<h3>Tarifas</h3>

			<table border="1">

				<tr>
					<td class="titulo_verde">
						<p>
							<strong>Día </strong> <sup>(1)</sup>
						</p>
					</td>
					<td class="titulo_verde">
						<p>
							<strong>Horario </strong> <sup>(2)</sup>
						</p>
					</td>
					<td class="titulo_verde">
						<p>
							<strong>Precio por hora</strong>
						</p>
						<p class="subtitulo">(3 primeras horas)</p>
					</td>
					<td class="titulo_verde">
						<p>
							<strong>Precio por hora</strong>
						</p>
						<p class="subtitulo">(Cuarta hora y sucesivas)</p>
					</td>
				</tr>

				<tr>
					<td rowspan="2" class="titulo_amarillo">
						<p>
							<strong>LUNES a JUEVES</strong>
						</p>
					</td>
					<td><p>09:00 a 18:00</p></td>
					<td><p>30€</p></td>
					<td><p>26€</p></td>
				</tr>
				<tr>
					<td><p>18:00 a 00:30</p></td>
					<td><p>30€</p></td>
					<td><p>26€</p></td>
				</tr>

				<tr>
					<td rowspan="2" class="titulo_amarillo">
						<p>
							<strong>VIERNES</strong>
						</p>
					</td>
					<td><p>09:00 a 18:00</p></td>
					<td><p>30€</p></td>
					<td><p>26€</p></td>
				</tr>
				<tr>
					<td><p>18:00 a 01:30</p></td>
					<td><p>42€</p></td>
					<td><p>38€</p></td>
				</tr>

				<tr>
					<td rowspan="2" class="titulo_amarillo">
						<p>
							<strong>SÁBADO</strong>
						</p>
					</td>
					<td><p>09:00 a 18:30</p></td>
					<td><p>49€</p></td>
					<td><p>44€</p></td>
				</tr>
				<tr>
					<td><p>18:30 a 02:00</p></td>
					<td><p>49€</p></td>
					<td><p>44€</p></td>
				</tr>

				<tr>
					<td rowspan="2" class="titulo_amarillo">
						<p>
							<strong>DOMINGOS Y FESTIVOS</strong> <sup>(3)</sup>
						</p>
					</td>
					<td><p>09:00 a 18:30</p></td>
					<td><p>45€</p></td>
					<td><p>40€</p></td>
				</tr>
				<tr>
					<td><p>18:30 a 00:30</p></td>
					<td><p>45€</p></td>
					<td><p>40€</p></td>
				</tr>

				<tr>
					<td rowspan="2" class="titulo_amarillo">
						<p>
							<strong>VÍSPERA FESTIVO</strong> <sup>(4)</sup>
						</p>
					</td>
					<td><p>09:00 a 18:00</p></td>
					<td><p>30€</p></td>
					<td><p>26€</p></td>
				</tr>
				<tr>
					<td><p>18:00 a 01:30</p></td>
					<td><p>42€</p></td>
					<td><p>38€</p></td>
				</tr>

			</table>

			<div class="explicacion_tarifas">

				<p>
					<sup>(1)</sup> Para las reservas comprendidas en los siguientes
					períodos consultar tarifas pues se consideran fechas especiales y
					pueden sufrir algún cambio:
				</p>

				</br>
				<ul>
					<li>Navidades: del 21 de diciembre al 6 de enero.</li>
					<li>Ferias de Valladolid</li>
				</ul>

				</br>
				<p>
					<sup>(2)</sup> La reserva del espacio deberá realizarse por un
					mínimo de 3 horas.
				</p>

				</br>
				<p>
					<sup>(3)</sup> A los festivos en sábado se les aplicará la tarifa
					de sábado.
				</p>

				</br>
				<p>
					<sup>(4)</sup> Se considerará víspera de festivo un día laborable
					(de lunes a viernes) que vaya anterior a un festivo.
				</p>

			</div>

			<a href="#formularioReserva" class="mostrar_reserva"><strong>Reservar</strong></a>

		</div>

		<!-- CALENDARIO -->

		<!-- 		<div class="calendario ordenador"> -->

		<!-- 			<h3>Calendario</h3> -->

		<!-- 			<iframe -->
		<!-- 				src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=merenderosurbanos%40gmail.com&amp;color=%23711616&amp;ctz=Europe%2FMadrid" -->
		<!-- 		style="border-width: 0" frameborder="0" scrolling="no"> -->
		<!-- 		</iframe> -->

		<!-- 		</div> -->

		<!-- 		<div class="calendario movil"> -->

		<!-- 			<h3>Calendario</h3> -->

		<!-- 			<iframe -->
		<!-- 				src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=merenderosurbanos%40gmail.com&amp;color=%23711616&amp;ctz=Europe%2FMadrid" -->
		<!-- 		style="border-width: 0" frameborder="0" scrolling="no"> -->
		<!-- 		</iframe> -->

		<!-- 		</div> -->

		<div class="texto_descriptivo">

			<p>En merendalia queremos que todas tus reservas giren en torno a la
				mesa. ¿Qué sería de nuestras reuniones, quedadas o reencuentros sin
				la comida y la bebida como protagonistas? Hemos querido ser lo más
				flexibles en lo que a esto se refiere. Existen tantas posibilidades
				casi como opciones se te ocurran. De la comida podemos encargarnos
				nosotros, o si lo prefieres puedes hacerlo tú:</p>
			</br>
			<p>
				<strong>Te encargas TÚ:</strong>
			</p>
			</br>
			<p>
			
			
			<ul>
				<li>- Puedes traerlo todo hecho de casa.</li>
				<li>- Puedes usar nuestra cocina completamente equipada para cocinar
					o preparar lo que os apetezca y hacer en Merendalia, ¡una jornada
					gastronómica completa!</li>
			</ul>
			</p>
			</br>
			<p>
				<strong>Nos encargamos NOSOTROS:</strong>
			</p>
			</br>
			<p>Si lo que te pasa es que no tienes tiempo ni ganas de andar
				preparando tú nada, esta es la mejor opción:</p>
			</br>
			<p>
			
			
			<ul>
				<li>- <u>Picoteo:</u> Te preparamos el típico picoteo para comer de
					pie. Empanadas, tortillas, ensaladas, embutidos, quesos, postres…
				</li>
				<li>- <u>Menús ¡Calentar y Listo!</u>: Te preparamos un menú
					completo. Te lo dejamos todo dispuesto para que solo tengas que,
					como mucho servir el segundo plato. Entrantes, ensaladas, postres,
					cafés, chupitos… No te preocupes por nada, ¡todo listo!
				</li>
			</ul>
			</p>
			</br>
			<p>
				<strong>Te encargas TÚ de unas cosas y NOSOTROS de otras:</strong>
			</p>
			</br>
			<p>
			
			
			<ul>
				<li>- Traes unas cosas de casa o te las preparas aquí y te
					preparamos el resto. Bebidas, los aperitivos, un segundo plato que
					es más engorroso de preparar...</li>
			</ul>
			</p>
			</br>
			<p>Aquí te dejamos una serie de productos que puedes pedir, pero si
				se te ocurre algún plato o guiso que no esté, ¡no dudes en
				decírnoslo!, iremos actualizando este apartado mensualmente.</p>

		</div>

	</div>

	<div class="explicacion productos">

		<h3>PRODUCTOS</h3>

		<p>
			En esta sección podrás ver todos los productos que tenemos preparados
			para aderezar tus reuniones y fiestas en Merendalia. Si no tienes
			tiempo para preparar nada, cuando reserves el espacio, podrás
			contratarnos productos de esta sección y ¡ser el anfitrión que
			querías ser sin necesidad de mover un dedo! </br> </br> De todas
			formas, como seguro que tienes alguna idea que no está en esta
			sección, ¡no dudes en llamarnos para ver si podemos incluirla!
			Queremos que disfrutes y estés a gusto.
		</p>

	</div>

	<div class="contenedor_productos">

		<div class="select_productos">

			<strong>Selecciona el tipo de producto </strong> <select id="select"
				name="select">
				<option value="todo" select>Ver todo</option>
				<option value="bebidas">Bebidas</option>
				<option value="refrescos">&nbsp;&nbsp;&nbsp;Refrescos</option>
				<option value="cervezas">&nbsp;&nbsp;&nbsp;Cervezas</option>
				<option value="vinos">&nbsp;&nbsp;&nbsp;Vinos</option>
				<option value="entrantes">Entrantes</option>
				<option value="ensaladas">Ensaladas</option>
				<option value="guisos">Guisos</option>
				<option value="postres">Postres</option>
				<option value="menusCalentarListo">Menús calentar y listo</option>
				<option value="merienda">Merienda infantil</option>
			</select>

		</div>

		<h3 class="titulo_bebida">BEBIDA</h3>

		<ul class="lista_productos_comida">

			<li class="cervezas">

				<div class="texto_producto_comida">
					<p>Cerveza Mahou Cinco Estrellas (Pack de 6)</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>6,5 €</strong>
					</p>
				</div>
			</li>

			<li class="cervezas">
				<div class="texto_producto_comida">
					<p>Cerveza Mahou Clásica (Pack de 6)</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>5,9 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Coca-cola normal</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,2 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Coca-cola Zero</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,2 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Coca-cola Light</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,2 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Fanta naranja</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,2 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Fanta limón</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,2 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Seven'Up</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,4 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Agua Solán de Cabras pequeña</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,2 €</strong>
					</p>
				</div>
			</li>

			<li class="refrescos">
				<div class="texto_producto_comida">
					<p>Agua Solán de Cabras grande</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>1,8 €</strong>
					</p>
				</div>
			</li>

			<li class="vinos">
				<div class="texto_producto_comida">
					<p>Vino tinto D.O. Ribera Carramimbre</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>9,5 €</strong>
					</p>
				</div>
			</li>

			<li class="vinos">
				<div class="texto_producto_comida">
					<p>Vino tinto D.O. Ribera Pinna Fidelis</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>10 €</strong>
					</p>
				</div>
			</li>

			<li class="vinos">
				<div class="texto_producto_comida">
					<p>Vino blanco D.O. Ruedo Monasterio de Palazuelos</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>8 €</strong>
					</p>
				</div>
			</li>

			<li class="vinos">
				<div class="texto_producto_comida">
					<p>Finca Valdemoya Frizzante Verdejo</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>9 €</strong>
					</p>
				</div>
			</li>

			<li class="vinos">
				<div class="texto_producto_comida">
					<p>Viña Picota rosado D.O. Cigales</p>
				</div>
				<div class="precio_producto_comida">
					<p>
						<strong>8 €</strong>
					</p>
				</div>
			</li>

		</ul>

		<div class="entrantes">

			<h3>ENTRANTES</h3>

			<ul class="lista_productos_comida">

				<li>
					<div class="texto_producto_comida">
						<p>Gildas (12uds.)</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>9.5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Bombones de Foie (ud.)</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>1,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Nachos con guacamole casero</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>9 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Patatas ali oli</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Tortilla de patatas</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>9 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Ración de queso curado de oveja</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>9 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Ración de cecina</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>9 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Ración de jamón ibérico</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>12 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Empanada de carne/atún (2 kg)</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>17 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Salpicón de marisco (por persona)</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Huevos rellenos (10 medios huevos)</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>8,5 €</strong>
						</p>
					</div>
				</li>

			</ul>

		</div>

		<div class="ensaladas">

			<h3>ENSALADAS (para 4 personas)</h3>

			<ul class="lista_productos_comida">

				<li>
					<div class="texto_producto_comida">
						<p>Ensalada mixta</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>6 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Ensalada de ventresca a la vinagreta</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>12 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Ensalada suprema (cecina, cebolla caramelizada, paté, piñones,
							berberechos)</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>14 €</strong>
						</p>
					</div>
				</li>

			</ul>

		</div>

		<div class="guisos">

			<h3>GUISOS (mínimo 6 personas, precio por persona)</h3>

			<ul class="lista_productos_comida">

				<li><i>De la tierra</i></li>

				<li>
					<div class="texto_producto_comida">
						<p>“Goulash Soap”(ternera con patatas)</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Callos con garbanzos</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Redondo de ternera</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5,3 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Caldereta de cordero</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>6 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Lasaña de carne</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Carrilleras de cerdo</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5,5 €</strong>
						</p>
					</div>
				</li>

				<li><i>De la mar</i></li>

				<li>
					<div class="texto_producto_comida">
						<p>Bacalao a la vizcaína</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Patatas con almejas</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>6,3 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Merluza en salsa verde</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>5,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Marmitako</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>6,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Bonito con tomate</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>6,5 €</strong>
						</p>
					</div>
				</li>

			</ul>

		</div>

		<div class="postres">

			<h3>POSTRES (mínimo 6 personas, precio por persona)</h3>

			<ul class="lista_productos_comida">

				<li>
					<div class="texto_producto_comida">
						<p>Tarta de queso</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>2.5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Tarta de manzana</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>2,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Tarta tres chocolates y bizcocho</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>3 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Tarta semifría de limón</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>2,5 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Tiramisú</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>3 €</strong>
						</p>
					</div>
				</li>

				<li>
					<div class="texto_producto_comida">
						<p>Tarta de zanahoria</p>
					</div>
					<div class="precio_producto_comida">
						<p>
							<strong>3,5 €</strong>
						</p>
					</div>
				</li>

			</ul>

		</div>

		<div class="menusCalentarListo">

			<h3>MENÚS CALENTAR Y LISTO</h3>

			<div class="menus_opciones">

				<p>
					<strong>Opción 1.</strong>
				</p>
				<p>
					<strong>21 € por persona</strong>
				</p>
				</br>
				<p>
					<i>Entrantes a compartir</i>
				</p>
				<p>Gildas</p>
				<p>Rollitos de cecina con paté de hígado de pato</p>
				<p>Calabacín rellen</p>
				</br>
				<p>
					<i>Primero</i>
				</p>
				<p>Ensalada de ventresca</p>
				</br>
				<p>
					<i>Segundo</i>
				</p>
				<p>A elegir un guiso de los de la lista, común para todo el grupo</p>
				</br>
				<p>
					<i>Postre</i>
				</p>
				<p>Tarta de queso</p>
				</br>
				<p>
					<i>Bebidas</i>
				</p>
				<p>Una botella de vino para tres personas a elegir Verdejo o Ribera,
					o un tercio de cerveza por persona, o un refresco o un agua.</p>
				</br>
				<p>Pan, café y chupitos incluido</p>

			</div>

			<div class="menus_opciones">

				<p>
					<strong>Opción 2.</strong>
				</p>
				<p>
					<strong>23 € por persona</strong>
				</p>
				</br>
				<p>
					<i>Entrantes</i>
				</p>
				<p>Vasito de aguacate y langostino</p>
				<p>Tartaleta de cabrales con nueces</p>
				<p>Bombón de foie</p>
				</br>
				<p>
					<i>Primero</i>
				</p>
				<p>Cóctel de marisco</p>
				</br>
				<p>
					<i>Segundo</i>
				</p>
				<p>A elegir un guiso de los de la lista, común para todo el grupo</p>
				</br>
				<p>
					<i>Postre</i>
				</p>
				<p>Tarta de tres chocolates</p>
				</br>
				<p>
					<i>Bebidas</i>
				</p>
				<p>Una botella de vino para tres personas a elegir Verdejo o Ribera,
					o una cerveza o un refresco o un agua.</p>
				</br>
				<p>Pan, café y chupitos incluido</p>

			</div>

		</div>

		<div class="merienda">

			<h3>MERIENDAS INFANTILES</h3>

			<div class="menus_opciones">

				<p>
					<strong>MENÚ MERIENDA CUMPLEAÑOS INFANTIL</strong>
				</p>
				<p>
					<strong>5,5 €</strong>
				</p>
				</br>
				<p>
					<i>Snacks variados</i>
				</p>
				</br>
				<p>
					<i>Bocaditos variados</i>
				</p>
				<p>Croissant vegetal</p>
				<p>Sandwich mixto</p>
				<p>Pollo con lechuga</p>
				<p>Atún con tomate</p>
				</br>
				<p>
					<i>Refrescos y agua</i>
				</p>
				</br>
				<p>
					<i>Postre: Brocheta de frutas con chocolate.</i>
				</p>
			</div>

		</div>

	</div>

	<div id="formularioReserva" class="contenedor_formulario">
    	<?php include_once("formulario.php");?>	
	</div>

	<footer>
        <?php include_once("footer.php");?>        
    </footer>

</body>
</html>