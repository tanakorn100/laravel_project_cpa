<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.5 : @yield('page_title')</title>
	{{ Html::style(('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css')) }}
	{{--
	@if(isset($style))
		@foreach ($style as $css)
			{{ Html::style(( $css )) }}
		@endforeach
	@endif
	--}}

</head>
<body>
	<div class="container">
		@yield('content')

	</div>
	{{ Html::script(('js\jquery.min.js')) }}
	{{ Html::script(('js\blog\app.js')) }}
	{{ Html::script(('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js')) }}

</body>
</html>
