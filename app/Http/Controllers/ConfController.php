<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfController extends Controller
{
    function index(Request $request)
    {
        // Obtener el valor actual de header_color de la sesión o el valor por defecto "#333"
        $headerColor = session('header_color', '#333');

        // Obtener el valor actual de font_style de la sesión o el valor por defecto "Arial"
        $fontType = session('font_style', 'Arial');

        $viewData = [];
        $viewData["title"] = "Admin Page - Tienda online";

        return view('conf.index', [
        ])->with("viewData", $viewData);
    }

    function update(Request $request)
    {
        $headerColor = $request->input('header_color');
        $fontStyle = $request->input('font_style');
    
        // Procesar la información actualizada y guardarla en la sesión
        session(['header_color' => $headerColor]);
        session(['font_style' => $fontStyle]);

        $viewData = [];
        $viewData["title"] = "Product Page - Tienda online";

        // Redirigir al usuario a la página de configuración
        return redirect()->route('conf.index')
            ->with('success', 'Configuración actualizada correctamente.')
            ->with("viewData", $viewData);
    }
}
