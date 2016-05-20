@extends('app')

@section ('content')
{!!Form::open(['url'=>'addimage', 'files'=>true])!!}
          <input type="hidden" name="album_id"value="{!!$album->id!!}" />
          <fieldset>
            <legend>Add an Image to {!!$album->name!!}</legend>
<div class="form-group">
    {!! Form::label('description', 'Raksts:') !!}
    {!! Form::textarea('description') !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Choose an image') !!}
    {!! Form::file('image') !!}
</div>
            <button type="submit" class="btnbtn-default">Add Image!</button>
          </fieldset>
  {!!Form::close()!!}
  @include('errors/list')
@stop