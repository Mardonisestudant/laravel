@extends('layouts.navbarHome')

@section('content')



<div class="container">
<h1>E-mails</h1>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>E-mail</th>
 <th>Menssagem</th>
 <th>Ação</th>
 </tr>
 </thead>

 <tbody>
  @foreach($email as $emails)
 <tr>
 <td>{{ $emails->id }}</td>
 <td>{{ $emails->name }}</td>
 <td>{{ $emails->email }}</td>
 <td>{{$emails->msg}}</td>
 <td><a href="{{ url('emails/emailcontato',['id'=>$emails->id ]) }}"  class="btn-sm btn-success">Editar</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>

@stop