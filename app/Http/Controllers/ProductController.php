<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Página principal donde se muestran los productos al usuario
    public function index()
    {
        // Trae productos con categoría y marca
        $products = Product::with(['category', 'brand'])->get();

        return view('products.index', compact('products'));
    }


    // Vista de detalle del producto
    public function detail($id, $category = null)
    {
        // Esto lo dejé tal cual lo tenías
        if ($category != null) {
            return view('products.detail', [
                'id' => $id,
                'category' => $category
            ]);
        } else {
            $category = "";
            return view('products.detail', compact('id', 'category'));
        }
    }


    // Vista del formulario para crear productos
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }


    // Guardar producto nuevo
    public function store(Request $request)
    {
        // VALIDACIÓN CORREGIDA
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0|max:99999999.99',
            'category'    => 'required|exists:categories,id',
            'brand'       => 'required|exists:brand,id',  
        ]);

        $product = new Product();
        $product->name        = $request->get('name');
        $product->description = $request->get('description');
        $product->price       = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id    = $request->get('brand');
        $product->save();

        return redirect()->route('admin.products.table');
    }


    // Tabla de productos en el admin
    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.table', [
            'products' => $products
        ]);
    }


    // Eliminar producto
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.table');
    }
}
