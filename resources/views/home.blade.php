@extends('baselayout')

@section('content')

<div class="row">
	<!-- <h1>Welcome to my website</h1>
	<p>We are creating something beautiful today.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  

	<h2>Sign In</h2>
	{!! Html::ul($errors->all(), array('class'=>'errors')) !!}

	{!! Form::open(array('url' => 'signin','class'=>'form-inline')) !!}

	{!! Form::label('email', 'E-Mail Address') !!}
	{!! Form::text('email', 'example@gmail .com', array('class' => 'form-control')) !!}
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', array('class' => 'form-control')) !!}

	{!! Form::submit('Sign In' , array('class' => 'btn btn-primary')) !!}
	{!! Form::close() !!} -->
	<div class="col-md-12">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      	<li data-target="#myCarousel" data-slide-to="1"></li>
		      	<li data-target="#myCarousel" data-slide-to="2"></li>
		      	<li data-target="#myCarousel" data-slide-to="3"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      	<div class="item active">
		        	<img src="http://localhost/gaganbavada/public/img/g-1.jpg" alt="Chania">
		      	</div>
		      	<div class="item">
		        	<img src="http://localhost/gaganbavada/public/img/g-2.jpg" alt="Chania">
		      	</div>
		      	<div class="item">
		        	<img src="http://localhost/gaganbavada/public/img/g-3.jpg" alt="Chania">
		      	</div>
		      	<div class="item">
		        	<img src="http://localhost/gaganbavada/public/img/g-6.jpg" alt="Chania">
		      	</div>
		      	<div class="item">
		        	<img src="http://localhost/gaganbavada/public/img/g-7.jpg" alt="Chania">
		      	</div>
		    </div>
		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      	<span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      	<span class="sr-only">Next</span>
		    </a>
		</div>
	</div>
</div>

@stop