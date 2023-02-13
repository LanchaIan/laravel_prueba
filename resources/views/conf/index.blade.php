{{-- **** CARGA LA PLANTILLA DEL PANEL DE CONTROL ***** --}}
@extends('layouts.app')
{{-- **** ASIGNA UN TEXTO AL TÍTULO*** --}}
@section('title', $viewData['title'])
{{-- **** CONTENIDO **** --}}
@section('content')
    <div class="card">
        <div class="card-header">
            Página principal del panel de control
        </div>
        <div class="card-body">
            <h5>Configuración de estilos de la plantilla</h5>
            <form method="POST" action="{{ route('conf.update') }}">
                @csrf
                <div class="form-group">
                    <label for="header_color">Color del encabezado:</label>
                    <input type="color" class="form-control" id="header_color" name="header_color"
                        value="{{ session('header_color', '#333') }}">
                </div>
                <div class="form-group">
                    <label for="font_style">Estilo de letra:</label>
                    <select class="form-control" id="font_style" name="font_style">
                        <option value="Arial" {{ session('font_style', 'Arial') == 'Arial' ? 'selected' : '' }}>Arial
                        </option>
                        <option value="Courier New" {{ session('font_style', 'Arial') == 'Courier New' ? 'selected' : '' }}>Courier New
                        </option>
                        <option value="Georgia" {{ session('font_style', 'Arial') == 'Georgia' ? 'selected' : '' }}>Georgia
                        </option>
                        <option value="Tahoma" {{ session('font_style', 'Arial') == 'Tahoma' ? 'selected' : '' }}>Tahoma
                        </option>
                        <option value="Verdana" {{ session('font_style', 'Arial') == 'Verdana' ? 'selected' : '' }}>Verdana
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar configuración</button>
            </form>
        </div>
    </div>
@endsection
