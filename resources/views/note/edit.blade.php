@extends('layout');


@section('content') 
	<h1>Edit note</h1>

	<form  method="POST" action="/notes/{{$note->id}}">

		{{ method_field('PATCH') }}
		<div class="form-group">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input name="body" class="form-control" value="{{$note->body}}">  
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">update note</button>
		</div>
	</form>


@stop