@extends('layouts.navbarWelcome')
@section('content')
<div class="row-fluid">
<div class="col-md-12">
{!! Form::open(['route' => 'email']) !!}
<div class="form-group">
{!! Form::label('name','Nome:') !!}
{!! Form::text('name',null,['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
{!! Form::label('email','E-mail:') !!}
{!! Form::email('email',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('msg','Menssagem:') !!}
{!! Form::textarea('msg',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

</div>
</div>
@stop
