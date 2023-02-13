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

    <form method="POST" action="{{ route('admin.products.update', ['id' => $product->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="name" type="text" class="form-control" value="{{ old('name', $product->name) }}">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="price" type="number" step="any" class="form-control" value="{{ old('name', $product->price) }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea class="form-control" name="description" rows="3">{{ old('name', $product->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Imagen actual</label><br>
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200">
        </div>
        <div class="mb-3">
            <label class="form-label">Nueva imagen</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
@endsection
