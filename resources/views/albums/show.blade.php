@extends('app')

@section ('content')
@if(Auth::user())
				<a href="{!! '/addimage/'.$album->id!!}"><button type="button" class="btnbtn-danger btn-small">Pievienot bildi </button></a>
	@endif
<h2>{!!$album->name!!}</h2>
<p>{!!$album->description!!}<p>
@foreach($album->Photos as $photo)
	<div class="alb">
		<a class="fancybox" rel="gallery1" href="{!! '/albums/'.$photo->image !!}">
  <img src="{!! '/albums/'.$photo->image !!}" width="300" height="200">
  </a>
  <p>{!!$photo->description!!}</p>
  @if(Auth::user())
   <a href="{!!URL::route('delete_image',array('id'=>$photo->id))!!}" onclick="return confirm('Are you sure?')"><button type="button" class="btnbtn-danger btn-small">Dzēst attēlu </button></a>
   		@endif

</div>
@endforeach

@stop
