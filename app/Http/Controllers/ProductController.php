<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public static $products;

    // public function insert() {
    //     ProductController::$products[0] = array(
    //         "id" => 0, 
    //         "name" => "Consola", 
    //         "description" => "PlayStation 5 con todos los juegos del mundo", 
    //         "image" => asset('img/game.png'), 
    //         "price" => 400.60, 
    //     );
    //     ProductController::$products[1] = array(
    //         "id" => 1, 
    //         "name" => "Submarino", 
    //         "description" => "Un submarino pequeñito", 
    //         "image" => asset('img/submarine.png'), 
    //         "price" => 1000,  
    //     );
    //     ProductController::$products[2] = array(
    //         "id" => 2, 
    //         "name" => "Caja", 
    //         "description" => "Una caja altamente de seguridad", 
    //         "image" => asset('img/safe.png'), 
    //         "price" => 10.89, 
    //     );
    //     ProductController::$products[3] = array(
    //         "id" => 3, 
    //         "name" => "Mando PSP", 
    //         "description" => "Un mando para controlarlos a todos", 
    //         "image" => asset('img/fruit.png'), 
    //         "price" => 150.30, 
    //     );
    // }

    // public function index() {
    //     $this -> insert();
    //     $viewData = [];
    //     $viewData["title"] = "Página principal - Tienda online";
    //     $viewData["subtitle"] = "Este es el subtitulo de productos";
    //     $viewData["products"] = ProductController::$products;
    //     return view('products.index')
    //         ->with("viewData", $viewData);
    // }

    // public function show($id) {
    //     $this -> insert();
    //     $product = ProductController::$products[$id];
    //     $viewData = [];
    //     $viewData["title"] = "Página principal - Tienda online";
    //     $viewData["subtitle"] = "Este es el subtitulo de productos";
    //     $viewData["products"] = $product;
    //     return view('products.show')
    //         ->with("viewData", $viewData);
    // }


    // ----------------------------------------------------------------

    public function index() {
        // $this -> insert();
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";
        $viewData["subtitle"] = "Este es el subtitulo de productos";
        // $viewData["products"] = ProductController::$products;
        $viewData["products"] = Product::all();
        // $product = Product::all();
        return view('products.index')
            ->with("viewData", $viewData);
    }

    public function show($id) {
        // $this -> insert();
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";
        $viewData["subtitle"] = "Este es el subtitulo de productos";
        // $viewData["products"] = ProductController::$products;
        $viewData["products"] = Product::find($id);
        // $product = Product::find($id);
        // $product->name = $this->convertToUpperCase($product->name);
        // $product->description = $this->convertToUpperCase($product->description);
        // $this->convertToUpperCase($viewData["title"]);
        return view('products.show')
            ->with("viewData", $viewData);
    }

    // private function convertToUpperCase($text) {
    //     return mb_strtoupper($text);
    // }
      
}