@extends('app')

@section ('content')
<div class="content">
	<h1>Sakuma lapa</h1>
	@foreach ($articles as $article)
		<article>
			<h2>{!!$article->title!!}</h2>
			<p>{!!$article->body!!}</p>
		</article>
	@endforeach
</div>
@stop
