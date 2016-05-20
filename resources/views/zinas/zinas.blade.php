@extends('app')

@section ('content')

	<h1>Ziņas</h1>
	@foreach ($articles as $article)
		<article>
			<h2>{!!$article->title!!}</h2>
			<p>{!!$article->body!!}</p>
		</article>
	@endforeach

@stop
