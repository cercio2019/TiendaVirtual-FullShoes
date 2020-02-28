@extends('shoes.template')
@section('seccion')
 <div class="container mt-4">
 	<div class="row">
 	<div class="col-12">
 		<h3 class="text-center">Factura de pedido</h3>
 	</div>
 	</div>
 	<div class="row">
 		<div class="col-12 mt-4">
 		
 		<table class="table">
 			<thead class="bg-primary text-white">
 				<tr>
 					<td>id</td>
 					<td>nombre</td>
 					<td>cantidad</td>
 					<td>precio</td>
 				</tr>
 			</thead>
 			<tbody>
 				@foreach($car as $carro)
                 <tr>
                 	<td>{{$carro->id}}</td>
                 	<td>{{$carro->nombre}}</td>
                 	<td>{{$carro->quantity}}</td>
                 	<td>{{$carro->precio}}$</td>
                 </tr>
 				@endforeach
 			</tbody>
 		</table>
 	</div>
 </div>
 	<div class="row">
 	<div class="col-12 mt-3">
 		<h3 class="text-center">Monto total: {{ number_format($total) }} $</h3>
 	</div>
 	</div>

 	<div class="row">
 	<div class="col-12 mt-4">
 		<a href="{{route('shoes.index')}}" class=" btn btn-danger">volver</a>
 	</div>
 	</div>
 </div>
@endsection