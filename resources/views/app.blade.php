<!doctype html>
<html lang="en">
<head>

	<link rel="stylesheet" href="{!! URL::asset('css/style.css') !!}">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script src="{!! URL::asset('js/jquery.js') !!}"></script>
	<meta charset="UTF-8">
	<title>Doc</title>
</head>
<body>	
	<div class="container">
		<div class="wrapper">
			<img src="{{ URL::asset('images/koris3.png') }}">
			<div class="user">
				@if(Auth::user())
					<p> {!!Auth::user()->name!!} <a href="/auth/logout"> Iziet</a></p>
					@endif
			</div>
			<nav class="nav">
				<ul>
					<li><a href="/zinas">Ziņas</a></li>
					<li><a href="/dalibnieki">Kora dalībnieki</a></li>
					<li><a href="/album">Galerija</a></li>
					<li><a href="/about">Par kori</a></li>
				</ul>
			</nav>
		</div>
		<div class="content">
			@yield('content')
		</div>
	</div>
</body>
</html>
