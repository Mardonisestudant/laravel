@extends('layouts.navbarWelcome')

@section('content')

<div class="row-fluid">
 <div class="row-fluid">
    <!--categorias-->
    <div class="col-md-3">
		  @if(isset($modulo1))
		    	@foreach($modulo1 as $modulo1s)

		    	<img src="{{asset('/img/'.$modulo1s->filename)}}" alt="Chania">
		    	<p>{{$modulo1s->descricao}}</p>

		    	    @endforeach
		  @endif
    </div>

    <div class="col-md-3">
    			@if(isset($modulo2))
    			@foreach($modulo2 as $modulo)    
		    	<img src="{{asset('/img/'.$modulo->filename)}}" alt="Chania">
		    	<p>{{$modulo->descricao}}</p>
		    	@endforeach
		    	@endif
    </div>
    <div class="col-md-3">
    	@if(isset($modulo3))
		    	@foreach($modulo3 as $modulo1s)

		    	<img src="{{asset('/img/'.$modulo1s->filename)}}" alt="Chania">
		    	<p>{{$modulo1s->descricao}}</p>

		    	    @endforeach
		  @endif
    </div>
    <div class="col-md-3">
    	@if(isset($modulo4))
		    	@foreach($modulo4 as $modulo1s)

		    	<img src="{{asset('/img/'.$modulo1s->filename)}}" alt="Chania">
		    	<p>{{$modulo1s->descricao}}</p>

		    	    @endforeach
		  @endif
    </div>

  </div>
</div>

@stop