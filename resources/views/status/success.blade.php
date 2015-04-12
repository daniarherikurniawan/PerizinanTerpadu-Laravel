@extends("layouts.masterfront")
<?php 
	 header("Refresh: 4 ; url=$url");
 ?>
@section('content')
	  <div id="login-page">
	  	<div class="container">
	  				
			{!! Form::open(['url'=>"signup",'class'=>"form-login", 'method'=>'PATCH'])!!}
		     
		        <h2 class="form-login-heading"><b>Pesan</b></h2>
		        <div class="login-wrap">
				<div class="row">
					<div class = "text-center">
						<img class=""  width="30"  src="assets/img/status/success.png">
					</div>
				</div>
				<div class=" text-center text-info" ><h4><p>{{$str}}</p></h4></div>
		    {!!Form::close()!!}
		
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>
		<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 300});
    </script>
@stop