@extends('shoes.template')

@section('seccion')

<div class="container mt-5">
	<div class="row">
		<div class="col-12 text-center">
			<h4>Carrito de compras</h4>
		</div>
		<div class="col-12 mt-4">
			<table class="table">
				<thead class="bg-primary text-white">
					<tr>
						<td>id</td>
						<td>Nombre</td>
						<td>cantidad</td>
						<td>precio</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					@foreach($car as $carro)
					<tr>						
						<td>{{ $carro->id }}</td>
						<td>{{ $carro->nombre}}</td>
						<td>
							<input
						 type="number"
						 min="1"
						 max="100"
						 value="{{$carro->quantity}}"                          
						  >
						</td>
						<td>{{ number_format($carro->precio) }} $</td>

						<td><a href="{{route('car-delete', $carro->id)}}" class="btn-danger btn">eliminar</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-12 mt-4">
			<a href="{{route('shoes.index')}}" class="btn btn-primary">agregar mas </a>
			<a href="{{route('car-trash')}}" class="btn btn-danger">Vaciar carrito</a>
			<a href="{{route('order-detail')}}" class="btn btn-dark">Comprar</a>

		</div>
	</div>
</div>

@endsection