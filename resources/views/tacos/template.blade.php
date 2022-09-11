<!DOCTYPE html>
<html>

<head>

	<title>@yield('title','TACOS LOS HERMANOS')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">

</head>
<body>
	@include('tacos.views_partials.nav')</br>
	@yield('views_content')</br>
	@include('tacos.views_partials.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="{{asset('js/dom.js')}}"></script>
</body>
</html>	