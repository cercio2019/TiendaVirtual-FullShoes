@extends('shoes.template')

@section('seccion')

<div class="container">
	<h3 class="mt-4">Ultimos modelos:</h3>
</div>
 @if (Session::has('message'))
      <div class="alert alert-info mt-3">{{ Session::get('message') }}</div>
 @endif

 <div class="container">
 	<div class="row">
 		@foreach($shoes as $Shoe)
 		<div class="col-4 mt-5">
 			<div class="card">
                  <img class="card-img-top" src="calzimg/{{$Shoe->imagen}}">
 				<div class="card-body">
 					<h5 class="card-tittle">{{$Shoe->nombre}}</h5>
 					<p>{{$Shoe->Descripcion}}</p>
 					<p>{{$Shoe->precio}} $</p>
                     <a href="" class="btn btn-primary">Comprar</a>
                      <a href="{{route('car-add', $Shoe->id)}}" class="btn btn-danger">carrito</a>
 				</div>		
 			</div>
 		</div>
 		 @endforeach
 	</div>
   

    <div class="bg-primary mt-4"><div class="p-1 mt-2"> {{ $shoes->links() }}</div></div>
 </div>


@endsection