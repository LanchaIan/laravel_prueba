<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";
        $viewData["products"] = Product::all();
        return view('home.index')->with("viewData", $viewData);
    }

    public function about() {
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";
        $viewData["subtitle"] = "Este es el subtitulo";
        $viewData["description"] = "Esta es la descripción";
        $viewData["author"] = "Carlos";
        return view('home.about')->with("viewData", $viewData);
    }
}
