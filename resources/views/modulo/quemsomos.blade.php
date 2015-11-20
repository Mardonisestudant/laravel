@extends('layouts.navbarwelcome')
@section('content')
<div class="row-fluid">
@if(isset($modulo5))
	@foreach($modulo5 as $modulo)

	@endforeach
@endif
<div class="col-md-8">
<br><br>
<p>{{ $modulo->descricao }}</p>
</div>
<div class="col-md-4">
<img src="{{asset('/img/'.$modulo->filename)}}">
</div>


</div>

@stop
