@extends('app')

@section ('content')

	<h1>Labot Ziņu {!! $article->title !!}</h1>
	{!!Form::open(['method'=>'PATCH', 'action'=>['zinas@update',$article->id],'files'=>true])!!}

		@include('zinas.forma',['Poga' =>'Labot Rakstu','body'=>$article->body,'title'=>$article->title])
		<a href="{!!URL::route('delete_article',array('id'=>$article->id))!!}" onclick="return confirm('Dzēst rakstu?')"><button type="button" class="btnbtn-danger btn-small">Dzēst rakstu </button></a>
	{!!Form::close()!!}

@include('errors/list')


@stop
