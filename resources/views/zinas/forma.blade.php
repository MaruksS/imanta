<div class="form-group">
    {!!Form::label('title','Virsraksts:')!!}
    {!!Form::text('title',$title, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Choose an image') !!}
    {!! Form::file('image') !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Raksts:') !!}
    {!! Form::textarea('body', $body, ['class'=>'form-control', 'rows'=>5] ) !!}
</div>
<div class="form-group">
    {!! Form::submit($Poga, array( 'class'=>'btn btn-danger form-control' )) !!}
</div>