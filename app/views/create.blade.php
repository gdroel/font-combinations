@extends('layout')
@section('fonts')


@section('content')

<div class="col-md-4">
{{ Form::open(array('action'=>'HomeController@doCreate')) }}
{{ Form::text('font1', null, array('class'=>'form-control')) }}
{{ Form::text('font2', null, array('class'=>'form-control')) }}
{{ Form::submit('add combination') }}
{{ Form::close() }}
</div>


@stop