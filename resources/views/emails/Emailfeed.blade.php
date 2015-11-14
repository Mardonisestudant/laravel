

@foreach($email as $emails)

<div class="container">
<h1>E-mails</h1>
<table boder="1">
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
 	<tr>
 <td>{{ $emails->id }}</td>
 <td>{{ $emails->name }}</td>
 <td>{{ $emails->email }}</td>
 <td>{{$emails->msg}}</td>
</tr>
</tbody>
</table>
</div>


@endforeach

