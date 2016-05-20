@extends('app')

@section ('content')

	@foreach ($albums as $album)
	<div class="alb">
		<album>
			<h2><a href="album/{!!$album->id!!}">{!!$album->name!!}</a></h2>
			<p>{!!$album->description!!}</p>
			<div><img src="{!! '/albums/'.$album->cover_image !!}" width="300" height="200"></div>
			@if(Auth::user())
				<a href="{!!URL::route('delete_album',array('id'=>$album->id))!!}" onclick="return confirm('Tiešām dzēst albumu?')"><button type="button" class="btnbtn-danger btn-small">Dzēst albumu </button></a>
			@endif
			</album>
	</div>
	@endforeach

@stop
