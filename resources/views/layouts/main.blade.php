<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.5 : @yield('page_title')</title>
	{{ Html::style(('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css')) }}
	{{ Html::style(('css\song\blog.css')) }}
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container">
		{{-- {{ Html::link('songkorea/','', style="max-width: 150px;", Html::image(asset('images\YK48logo.png'))) }} --}}
		<div class="col-md-3">
			<img src="images\YK48logo.png" class="img-responsive" style="max-width: 150px;">
		</div>
		<div class="col-md-9 text-right " >
			{{ Html::link('login','LOGIN', array(
        'class' => 'btn btn-default'
      )) }}
		</div>

  </div>
</nav>


<div class="main-container">
		<div class="container">
		@yield('content')
		</div>
	</div>
	{{ Html::script(('js\jquery.min.js')) }}
	{{ Html::script(('js\blog\app.js')) }}
	{{ Html::script(('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js')) }}

</body>

<footer>
	<div class="footer">
		<nav class="navbar navbar-default" style="margin: 0;">
	    <div class="container">
	      <div class="col-md-1">
	        <img src="musics\cover\touchnct.jpg" class="img-responsive" style="max-width: 60px">
	      </div>
	      <div class="col-md-9">
						<audio controls style="width: 100%;"><source src="musics/TOUCH.m4a" type="audio/mpeg"></audio>
	      </div>
	      <div class="col-md-2">
	      </div>
	    </div>
	  </nav>
	</div>
</footer>
</html>
