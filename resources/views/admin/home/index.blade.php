{{-- **** CARGA LA PLANTILLA DEL PANEL DE CONTROL ***** --}}
@extends('layouts.admin')
{{-- **** ASIGNA UN TEXTO AL TÍTULO*** --}}
@section('title', $viewData['title'])
{{-- **** CONTENIDO **** --}}
@section("content")
<div class="card">
  <div class="card-header">
    Página principal del panel de control
  </div>
  <div class="card-body">
    Bienvenido/a al panel de control. Utiliza el menú lateral para navegar entre las diferentes opciones.
  </div>
</div>
@endsection