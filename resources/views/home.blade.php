@extends('layouts.navbarHome')

@section('content')
<div class="container">
<table class="table table-striped table-bordered table-hover">
<thead>
	<caption><h3>Banners Caroucel</h3></caption>
<tr>
 <th>ID</th>
 <th>Nome</th>
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
 <td>{{	$Fileuploads->descricao }}</td>
 <td>{{}}</td>
</tr>
@endforeach
@endif
</tbody>

</table>


</div>


@stop