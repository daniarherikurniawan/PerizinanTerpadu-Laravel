@extends("layouts.masterfront")
@section('content')
<div class="panel panel-primary">
	<div class="panel-heading inline text-center" ><h3>Upload Dokumen untuk Persyaratan Izin Gangguan (HO)</h3></div>

	<div class="panel-body">
		<div class="col-md-2">	</div>

		<div class="col-md-8">	

			<br>
			<div class="row form-group">
				<label class="col-md-4 control-label" for="namaPengusaha">DokumenA :</label>
				<div class="col-md-8">
					<?php 
						$urlUpload ="uploaddokumenawal/".$str; 
					 ?>
					{!! Form::open(array('url'=>$urlUpload,'method'=>'PATCH', 'visibility'=> 'hidden' ,'files'=>true)) !!}
			         
			          {!! Form::file('image') !!}
					  <p class="errors">{{$errors->first('image')}}</p>
					@if(Session::has('error'))
					<p class="errors">{{ Session::get('error') }}</p>
					@endif
				</div>
			</div>
			<div class="row form-group">
				<label class="col-md-4 control-label" for="alamatPengusaha">DokumenB :</label>
				<div class="col-md-8">
					
			          {!! Form::file('image') !!}
					  <p class="errors">{{$errors->first('image')}}</p>
					@if(Session::has('error'))
					<p class="errors">{{ Session::get('error') }}</p>
					@endif
				</div>
			</div>
			<div class="row form-group">
				<label class="col-md-4 control-label" for="kebangsaan">DokumenC :</label>
				<div class="col-md-8">
					
			          {!! Form::file('image') !!}
					  <p class="errors">{{$errors->first('image')}}</p>
					@if(Session::has('error'))
					<p class="errors">{{ Session::get('error') }}</p>
					@endif
				</div>
			</div>
			<div class="row form-group">

				<div class="row pull-center col-sm-9">
					
					
				</div>


				<div class="col-md-12 text-center">
					{!! Form::submit('Submit Image', array('class'=>'send-btn ','class'=>'btn-success btn' , 'class'=>'btn get')) !!}
			      {!! Form::close() !!}
				</div>
			</div>
		</div>
		<div class="span3">	</div>
	</div>
</div>
@stop