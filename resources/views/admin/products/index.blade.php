{{-- **** CARGA LA PLANTILLA DEL PANEL DE CONTROL ***** --}}
@extends('layouts.admin')
{{-- **** ASIGNA UN TEXTO AL TÍTULO*** --}}
@section('title', $viewData['title'])
{{-- **** CONTENIDO **** --}}
@section('content')
    {{-- **** SI HA OCURRIDO ALGÚN ERROR DE VALIDACIÓN, MUÉSTRALO AQUÍ ***** --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="name" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="price" type="number" step="any" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>

    <div class="card">
        <div class="card-header">
            Panel de control de productos
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($viewData['products'] as $product)
                        <tr class="text-center">
                            <th>{{ $product->id }}</th>
                            <th>{{ $product->name }}</th>
                            <th>
                                <a href="{{ route('admin.products.edit', $product->id)}}"><button type="submit" class="btn btn-warning">Editar</button></a>
                            </th>
                            <th>
                                <form action="{{ route('admin.products.delete', $product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    

                    {{-- ****** MUESTRA EL LISTADO DE LOS PRODUCTOS ***** --}}

                </tbody>
            </table>
        </div>
    </div>
@endsection
