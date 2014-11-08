@extends('layout')
@section('fonts')

<link href='http://fonts.googleapis.com/css?family={{ $font1 }}|{{ $font2 }}' rel='stylesheet' type='text/css'>
@section('content')

<h1 style="font-family: '{{ $font1 }}' ">My dummy Title</h1>
<p style="font-family: '{{ $font2 }}' ">I know lying is wrong, but if the elephant man came in now in a blouse with some make up on, and said "how do I look?" Would you say — bearing in mind he's depressed and has respiratory problems — would you say "go and take that blusher off you mis-shapen headed elephant tranny"? No. You'd say "You look nice... John"</p>
@stop