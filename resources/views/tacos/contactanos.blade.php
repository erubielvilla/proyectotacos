@extends('tacos.template')
@section('views_content')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="contenidos-paginas">
		<div id="centro3">
			<h1>
				<em class="encabezados t2">Contactate con Nosotros</em>
			</h1>
            <h3>Te agradecemos el interés en contactarnos.</h3>
			<p class="descripcion-pagina">
                Contactanos en Ciudad de Poza Rica para cualquier pregunta o comentario acerca de nuestros servicios y productos.
			</p>
			<hr>

			<div id="contenido-nosotros">
				
				<div id="izquierda">
					<p class="descripcion-pagina texto-contacto">
                        Horarios de Atención telefónica <br>
                        Lun - Sab: 9:00 am - 7:00 pm<br>
                        Dom: 9:00 am - 2:00 pm<br>
						Telélefono: <strong>2626-2626</strong><br>
						Celular: <strong>7841231243</strong><br>
						Email: <strong><a href="mailto: villanuevaeru@gmail.com" class="email-contacto">TACOSLOSHERMANOS@gmail.com</a></strong>
					</p>
				</div>	


				<div id="derecha">
					<form action="#" method="POST">
						<input type="text" name="nombre" placeholder="Ingresa tu nombre" class="nombre-mensaje">
						<br>
						<input type="email" name="correo" placeholder="Ingresa tu coreo" class="email-asunto">

						<input type="text" name="asunto" placeholder="Ingresa el asunto" class="email-asunto"><br>

						<textarea name="mensaje" placeholder="Ingrese su mensaje " class="nombre-mensaje"></textarea><br>

						<input type="submit" name="enviar" value="Enviar">
					</form>
				</div>

				<div id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.205886558182!2d-88.16743098199365!3d13.461402473858934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72953df7e0502a9b!2sMetrocentro+San+Miguel!5e0!3m2!1ses-419!2ssv!4v1564899753613!5m2!1ses-419!2ssv" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				

			</div>

			
		</div>
	</div>
</body>
</html>
@stop