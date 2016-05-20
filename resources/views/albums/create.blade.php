@extends('app')

@section ('content')

{!!Form::open(['url'=>'album', 'files'=>true])!!}
<legend>Izveido albumu</legend>
<div class="form-group">
  {!!Form::label('name','Albuma nosaukums:')!!}
  {!!Form::text('name',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Albuma Apraksts:') !!}
  {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5] ) !!}
</div>
<div class="form-group">
  {!! Form::label('cover_image', 'Izvelies albuma galveno bildi') !!}
  {!!Form::file('cover_image')!!}
</div>
<div class="form-group">
  {!! Form::submit(null, array( 'class'=>'btn btn-danger form-control' )) !!}
</div>
{!!Form::close()!!}
@include('errors/list')
@stop