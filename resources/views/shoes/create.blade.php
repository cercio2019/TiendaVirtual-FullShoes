@extends('shoes.template')

@section('seccion')

<div class="container">
	<h3 class="mt-4">Registrar calzado:</h3>
</div>

@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif

<div class="container">
	<form action="{{route('shoes.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
		<label>nombre</label><input type="text" name="nombre" class="form-control">
		<label>Foto</label><input type="file" name="imagen" class="form-control">
		<label>Precio</label><input type="text" name="precio" class="form-control">
		<label>Descripcion</label><textarea class="form-control" name="descripcion"></textarea>
		<input type="submit" name="" value="registrar" class="btn btn-primary">
	</form>
</div>

@endsection