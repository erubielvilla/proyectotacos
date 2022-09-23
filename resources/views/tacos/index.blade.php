@extends('tacos.template')
@section('views_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TACOS LOS HERMANOS</title>
</head>
<body id="fondo">
<main>
		<section id="baner">
			<img src="{{ asset('img/index.jpg') }}">
			<div class="contenedor">
				<h1>
					TACOS LOS HERMANOS 
				</h1>
				<a class="btn btn-primary" href="/Acerca de nosotros"">Acerca de nosotros</a>
			</div>
		</section>

		<section id="descripcion">
			<h2>
				BIENVENIDO A NUESTRA PÁGINA, DONDE PODRA ENCONTRAR VARIEDAD DE TACOS
			</h2>
			<p>Productos y servicio de calidad usamos productos de calidad así como el personal capacitado para darle en manejo y la higiene que tu mereces.</p>
		</section>
		<section id="menu">
			<h3>Paquetes que te ofrecemos</h3>
				<div class="contenedor-img">
					<article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4><a href="/Paquete1"> Paquete 1</a></h4>
					</article>
          <article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4>Paquete 2</h4>
					</article>
          <article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4>Paquete 3</h4>
					</article>
          <article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4>Paquete 4</h4>
					</article>
          <article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4>Paquete 5</h4>
					</article>
          <article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4>Paquete 6</h4>
					</article>
          <article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4>Paquete 7</h4>
					</article>
          <article>
						<img src="{{ asset('img/paquete1.jpg') }}">
						<h4>Paquete 8</h4>
					</article>
				</div>
		</section>
	</main>
</body>
</html>
@stop