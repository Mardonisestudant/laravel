@extends('layouts.navbarHome')
@section('content')
<div class="row-fluid">
	
<div class="col-md-12">
{!! Form::open(['route' => 'bannerpost','files' => true]) !!}
<div class="form-group">
{!! Form::label('filename','FileName:') !!}
{!! Form::text('filename',null,['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
{!! Form::label('file','File:') !!}
{!! Form::File('imagem') !!}

{!! Form::label('ativo','Ativo:') !!}
{!! Form::radio('ativo',1) !!}
</div>
<div class="form-group">
{!! Form::label('categoria','Categoria:') !!}
{!! Form::select('categoria',
array(
'Escolha' => 'Escolha.....',
'Banner' => 'Banner', 
'modulo1' => 'Modulo1',
'modulo2' => 'Modulo2',
'modulo3' => 'Modulo3',
'modulo4' => 'Modulo4',
'modulo5' => 'Modulo5')) !!}
</div>

<div class="form-group">
{!! Form::label('descricao','Descrição:') !!}
{!! Form::textarea('descricao',null,['class'=>'form-control'] ) !!}
</div>

<div class="form-group">
{!! Form::submit('Upload',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

</div>
<div class="col-md-5">

</div>
</div>
@stop
