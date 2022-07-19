@extends('layout.app')
@section('title', 'Home')

@section('content')
    <h1 class="text-5xl text-center pt-24">Bienvenido a la aplicación 1.0</h1>
@endsection

@section('selects')
    <div class="d-grid gap-2 col-4 mx-auto">
        <br>
        <button type="button" class="btn btn-outline-primary">Agregar Sucursal</button>
        <button type="button" class="btn btn-outline-secondary">Agregar Categoría</button>
        <button type="button" class="btn btn-outline-success">Agregar Producto</button>
        <button type="button" class="btn btn-outline-info">Buscar Producto</button>
        <button type="button" class="btn btn-outline-danger">Eliminar Producto</button>
        <button type="button" class="btn btn-outline-warning">Actualizar Producto</button>
    </div>
@endsection

@section('list')
    <br>
    <h3 class="text-5xl text-center pt-24">Lista de Productos</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection