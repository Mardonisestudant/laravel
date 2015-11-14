@extends('layouts.navbarHome')
@section('content')
<div class="row-fluid">
<div class="col-md-7">
{!! Form::open(['url' => "emails/update/$email->id",'method' => 'put']) !!}
<div class="form-group">
{!! Form::label('name','Nome:') !!}
{!! Form::text('name',$email->name,['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
{!! Form::label('email','E-mail:') !!}
{!! Form::email('email',$email->email,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('msg','Menssagem:') !!}
{!! Form::textarea('msg',$email->msg,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

</div>
<div class="col-md-5">

</div>
</div>
</div>
@stop
