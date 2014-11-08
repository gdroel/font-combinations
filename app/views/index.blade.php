@extends('layout')
@section('fonts')

<link href='{{ $url }}' rel='stylesheet' type='text/css'>

@section('content')

@foreach($combos as $combo)
	<h2 style="font-family: '{{$combo->font1}}' ">{{ $combo->font1 }} Look Pretty Darn Good as a Title</h2>
	<p style="font-family: '{{$combo->font2 }}' ">{{ $combo->font2 }}All this wine nonsense! You get all these wine people, don't you? Wine this, wine that. Let's have a bit of red, let's have a bit of white. Ooh, that's a snazzy bouquet. Oh, this smells of, I don't know, basil. Sometimes you just want to say, sod all this wine, just give me a pint of, mineral water.</p>

@endforeach
@stop