@extends('layouts.navbarHome')

@section('content')
<div class="container">
<table class="table table-striped table-bordered table-hover">
<thead>
	<caption><h3>Banners Caroucel</h3></caption>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Categoria</th>
 <th>Descricão</th>
 <th>Ação</th>
 </tr>
 </thead>
 <tbody>
 @if(isset($Fileupload))
 @foreach($Fileupload as $Fileuploads)
 <tr>
 <td>{{ $Fileuploads->id }}</td>
 <td>{{ $Fileuploads->filename }}</td>
 <td>{{ $Fileuploads->categoria }}</td>
 <td>{{	$Fileuploads->descricao }}</td>
 <td><a href="{{ route('bannerput',['id'=>$Fileuploads->id ]) }}"  class="btn-sm btn-success">Editar</a></td>
</tr>
@endforeach
@endif
</tbody>
</table>

<table class="table table-striped table-bordered table-hover">
<thead>
	<caption><h3>Modulos</h3></caption>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Categoria</th>
 <th>Descricão</th>
 <th>Ação</th>
 </tr>
 </thead>
 <tbody>
 @if(isset($modulo1))
 @foreach($modulo1 as $modulo)
 <tr>
 <td>{{ $modulo->id }}</td>
 <td>{{ $modulo->filename }}</td>
 <td>{{ $modulo->categoria }}</td>
 <td>{{	$modulo->descricao }}</td>
 <td><a href="{{ route('bannerput',['id'=>$modulo->id ]) }}"  class="btn-sm btn-success">Editar</a></td>
</tr>
@endforeach
@endif

@if(isset($modulo2))
 @foreach($modulo2 as $modulo)
 <tr>
 <td>{{ $modulo->id }}</td>
 <td>{{ $modulo->filename }}</td>
 <td>{{ $modulo->categoria }}</td>
 <td>{{	$modulo->descricao }}</td>
 <td><a href="{{ route('bannerput',['id'=>$modulo->id ]) }}"  class="btn-sm btn-success">Editar</a></td>
</tr>
@endforeach
@endif

@if(isset($modulo3))
 @foreach($modulo3 as $modulo)
 <tr>
 <td>{{ $modulo->id }}</td>
 <td>{{ $modulo->filename }}</td>
 <td>{{ $modulo->categoria }}</td>
 <td>{{	$modulo->descricao }}</td>
 <td><a href="{{ route('bannerput',['id'=>$modulo->id ]) }}"  class="btn-sm btn-success">Editar</a></td>
</tr>
@endforeach
@endif

@if(isset($modulo4))
 @foreach($modulo4 as $modulo)
 <tr>
 <td>{{ $modulo->id }}</td>
 <td>{{ $modulo->filename }}</td>
 <td>{{ $modulo->categoria }}</td>
 <td>{{	$modulo->descricao }}</td>
 <td><a href="{{ route('bannerput',['id'=>$modulo->id ]) }}"  class="btn-sm btn-success">Editar</a></td>
</tr>
@endforeach
@endif
@if(isset($modulo5))
 @foreach($modulo5 as $modulo)
 <tr>
 <td>{{ $modulo->id }}</td>
 <td>{{ $modulo->filename }}</td>
 <td>{{ $modulo->categoria }}</td>
 <td>{{	$modulo->descricao }}</td>
 <td><a href="{{ route('bannerput',['id'=>$modulo->id ]) }}"  class="btn-sm btn-success">Editar</a></td>
</tr>
@endforeach
@endif
</tbody>
</table>
</div>


@stop