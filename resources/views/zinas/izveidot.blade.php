@extends('app')

@section ('content')

	<h1>Izveidot Ziņu</h1>
	{!!Form::open(['url'=>'zinas', 'files'=>true])!!}

		@include('zinas.forma', ['Poga'=>'Pievienot Rakstu','body'=>null,'title'=>null])

	{!!Form::close()!!}

@include('errors/list')

@stop
