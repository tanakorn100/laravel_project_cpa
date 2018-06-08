<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.5 : @yield('page_title')</title>
	{{ Html::style(('bootstrap3\css\bootstrap.min.css')) }}
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
	{{ Html::script(('bootstrap3\js\bootstrap.min.js')) }}

</body>
</html>
