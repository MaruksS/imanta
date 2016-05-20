@extends('app')

@section ('content')

	<h1>Ziņas</h1>
	@if(Auth::user())
				<a href="{!! '/zinas/create'!!}"><button type="button" class="btnbtn-danger btn-small">Izveidot rasktu </button></a>
	@endif
	@foreach ($articles as $article)
		<article>
			<h2><a href="zinas/{!!$article->id!!}">{!!$article->title!!}</a></h2>
			<p>{!!$article->body!!}</p>
			<div><img src="{!! '/images/'.$article->filePath !!}"></div>
		</article>
	@endforeach
@stop
