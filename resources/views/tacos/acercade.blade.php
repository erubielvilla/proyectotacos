@extends('tacos.template')
@section('views_content')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<section id="descripcion">
			<h2>
				<em class="encabezados t2">Sobre Nosotros</em>
			</h2>
            <img src="{{asset('img/logo_tacos.jpg')}}" width="150px" height="150px" alt="">
			<hr>

			<div id="contenido-nosotros">
				<p class="descripcion-pagina texto-nosotros">
                    Somos expertos en la elaboración y venta de tacos de con la receta original con más de 40 años, por eso hemos llegado a ser uno de los taquerias en la Ciudad de Poza Rica más famosos.
                    Los auténticos Tacos Los Hermanos de la Ciudad de Poza Rica somos una empresa 100% mexicana con 40 años de experiencia en el mercado, ofreciéndole un producto de calidad y de excelencia en comida mexicana.
                    Nuestras recetas original de los tacos son únicas e inigualables, las cuales se han mantenido desde 1971 en la Ciudad de Poza Rica.
                    Contamos con el servicio de tacos a domicilio en toda la ciudad.
				</p>
			</div>

			<div id="filosofia">
				<div id="mision">
					<img src="{{asset('img/user.jpg')}}" width="50px" height="50px">
					<br>
					<p class="descripcion-pagina">
                        De verdad que estos tacos si son buenos. Los probé en una fiesta familiar y después los pedí para mi cumpleaños. Formalidad desde que levantas el pedido hasta que te lo entregan.
                        Buenísimos, 100% recomendables.
					</p>
				</div>
				
				<div id="vision">
                    <img src="{{asset('img/user.jpg')}}" width="50px" height="50px">
					<br>
					<p class="descripcion-pagina">
                        De verdad que estos tacos si son buenos. Los probé en una fiesta familiar y después los pedí para mi cumpleaños. Formalidad desde que levantas el pedido hasta que te lo entregan.
                        Buenísimos, 100% recomendables.
					</p>
				</div>				

				<div id="valores">
                    <img src="{{asset('img/user.jpg')}}" width="50px" height="50px">
					<br>
					<p class="descripcion-pagina">
                        De verdad que estos tacos si son buenos. Los probé en una fiesta familiar y después los pedí para mi cumpleaños. Formalidad desde que levantas el pedido hasta que te lo entregan.
                        Buenísimos, 100% recomendables.
					</p>
				</div>

			</div>
		</section>
</body>
</html>
@stop