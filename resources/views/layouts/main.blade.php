<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.5 : @yield('page_title')</title>
	{{ Html::style(('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css')) }}
	{{ Html::style(('css\song\blog.css')) }}
</head>

<body>
<nav class="navbar navbar-default header">
  <div class="container ">
		{{-- {{ Html::link('songkorea/','', style="max-width: 150px;", Html::image(asset('images\YK48logo.png'))) }} --}}
		<div class="col-md-3">
			<img src="images\YK48logo.png" class="img-responsive" style="max-width: 150px;">
		</div>
		<div class="col-md-9 text-right " >
			@guest
					{{ Html::link('login','LOGIN', array(
		        'class' => 'btn btn-default')) }}
					{{ Html::link('register','REGISTER', array(
		        'class' => 'btn btn-default')) }}
			@else
					<a class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
									<li>
											<a href="{{ route('logout') }}"
													onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
													Logout
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
											</form>
									</li>
							</ul>
					</a>
			@endguest

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
		<nav class="navbar navbar-default" style="margin: 0;" id="player">
	    <div class="container">
	      <div class="col-md-1">
	        <img src="musics\cover\touchnct.jpg" class="img-responsive" style="max-width: 60px">
	      </div>
	      <div class="col-md-9">
						<audio controls style="width: 100%;"><source src="musics/TOUCH.m4a" type="audio/mpeg"></audio>
	      </div>
	      <div class="col-md-2">
					<div class="tabright" id="existingcase">

					</div>
	      </div>
	    </div>
	  </nav>
	</div>
</footer>
</html>

<script>
$(".linkright").click(function(){
    $(".tabright").hide();
    theDiv = $(this).attr("href");
    $(theDiv).slideToggle();

});
</script>
