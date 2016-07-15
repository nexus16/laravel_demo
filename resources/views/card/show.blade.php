@extends('layout')


@section('content')
	
	<h1>{{$card->title}}</h1>

	<ul class="list-group">
		@foreach ($card->notes as $note)
			<li class="list-group-item">{{$note->body}}</li>
		@endforeach
	</ul>



	<h3>Add note</h3>
	<form  method="post" action="/cards/{{$card->id}}/notes">
		<div class="form-group">
			<textarea name="body" class="form-control"></textarea>  
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">add note</button>
		</div>
	</form>

@stop