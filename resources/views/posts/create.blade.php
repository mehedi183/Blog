@extends('layouts.master')
@section('title', 'Create post')
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' => 'posts.store']) !!}
   				{{ Form::label('title','Title:') }}
   				{{ Form::text('title', null, array('class' => 'form-control')) }}

   				{{ Form::label('body', 'Post Body:') }}
   				{{ Form::textarea('body', null, array('class' => 'form-control')) }}

   				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'id' => 'createe_post')) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection