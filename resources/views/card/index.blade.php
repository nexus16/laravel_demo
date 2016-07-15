@extends('layout')

@section('content')

	<h1>Card page</h1>
	
	@foreach($cards as $card)

		<div>
			<p><a href="{{$card->path()}}" >{{$card->title}}</a></p>
		</div>

	@endforeach

@stop