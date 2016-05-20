@extends('app')

@section ('content')

	<h1>{!!$article->title!!}</h1>
		<article>
			<p>{!!$article->body!!}</p>
			<img src="{!! '/images/'.$article->filePath !!}">

			<p>Pievienots: {!!$article->created_at->format("d.m.Y")!!}</p>
			@if(Auth::user())
				<a href="{!! '/zinas/'.$article->id.'/edit'!!}"><button type="button" class="btnbtn-danger btn-small">Labot rasktu </button></a>
			@endif
			</article>

@stop
