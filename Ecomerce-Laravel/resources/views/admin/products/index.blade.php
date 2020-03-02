@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

  <div class="row mt-4">
    <a href="{{url('/admin/products/create')}}" type="button" class="btn btn-success my-4">Nuevo Producto</a>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th class="col-md-4">Descripcion</th>
          <th>Categoria</th>
          <th>Precio</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <th scope="row">{{$product->id}}</th>
          <td>{{$product->nombre}}</td>
          <td class="col-md-4">{{$product->descripcion}}</td>
          <td>{{$product->category?$product->category->nombre:''}}</td>
          <td>{{$product->precio}}</td>
          <td>
            <form method="post" action="{{url('/admin/products/'.$product->id.'/delete')}}">
              @csrf
              <a href="{{url('/products/'.$product->id)}}" class="btn btn-primary" target="_blank">
                <i class="fa fa-edit">ver</i>
              </a>
              <a href="{{url('/admin/products/'.$product->id.'/edit')}}" class="btn btn-success">
                <i class="fa fa-edit">edit</i>
              </a>
              <button class="btn btn-danger">
                <i class="fa fa-times">X</i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$products->links()}}

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

@endsection