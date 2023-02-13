<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData["title"] = "Product Page - Tienda online";
        $viewData["products"] = Product::all();
        return view('admin.products.index')->with("viewData", $viewData);
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|decimal:0,2|min:0',
        ]);

        $product = new Product();
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->image = '1.png';
        $product->save();

        if ($request->hasFile('image')) {
            $imageName = $product->id . '.' . $request->image->extension();
            Storage::disk('public')->put(  
                $imageName,  
                file_get_contents($request->file('image')->getRealPath())  
            );
            $product->image = $imageName;
            $product -> save();
        }

        $viewData = [];
        $viewData["title"] = "Product Page - Tienda online";
        $viewData["products"] = Product::all();

        return redirect()->route('admin.products.index')
            ->with('success', 'Producto creado correctamente')
            ->with('viewData', $viewData);
    }

    public function edit($id) {
        $product = Product::find($id);

        $viewData = [];
        $viewData["title"] = "Product Page - Tienda online";
        $viewData["products"] = Product::all();

        return view('admin.products.edit', ['product' => $product])
            ->with('viewData', $viewData);
    }

    public function update(Request $request, $id) {
    
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|decimal:0,2|min:0',
        ]);

        $product = Product::find($id);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];

        if ($request->hasFile('image')) {
            $imageName = $product->id . '.' . $request->image->extension();
            Storage::disk('public')->put(  
                $imageName,  
                file_get_contents($request->file('image')->getRealPath())  
            );
            $product->image = $imageName;
            $product -> save();
        }
        

        $viewData = [];
        $viewData["title"] = "Product Page - Tienda online";
        $viewData["products"] = Product::all();

        return redirect()->route('admin.products.index')
            ->with('success', 'Producto creado correctamente')
            ->with('viewData', $viewData);
    }

    public function delete($id) {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            $imageName = $product->image;
    
            if ($imageName) {
                Storage::disk('public')->delete($imageName);
            }
    
            $viewData = [];
            $viewData["title"] = "Product Page - Tienda online";
            $viewData["products"] = Product::all();

            return redirect()->route('admin.products.index')
                ->with('success', 'Producto creado correctamente')
                ->with('viewData', $viewData);
        } else {
            return back()->with('error', 'El producto que intentas eliminar no existe.');
        }
    } 
}
