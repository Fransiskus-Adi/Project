<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('name', 'like', "%" . $request->searchword . "%")->paginate();
        return view('show-products', compact('products'));
    }

    public function detailProduct($name)
    {
        $products = Product::firstwhere('name', '=', $name);
        return view('product-detail', compact('products'));
    }

    public function storeProduct(Request $request)
    {
        $validateProduct = $request->validate([
            'name' => 'required | min:0 | max:255',
            'price' => 'required | min:5000 | integer',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required | file | image',
        ]);

        // $productName = $request->image->getClientOriginalName();
        // $productFile = $request->file('image')->storeAs('image-product', $productName);
        $validateProduct['image'] = $request->file('image')->store('image-product');
        // $validateProduct['image'] = $productName;
        Product::create($validateProduct);
        return redirect()->route('manageProduct');
    }

    public function deleteProduct($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('manageProduct');
    }

    public function listProduct()
    {
        $products = Product::all();
        return view('manage-item', compact('products'));
    }

    public function updateProduct($id)
    {
        $product = Product::firstwhere('id', '=', $id);
        return view('update-item', compact('product'));
    }

    public function validateUpdate(Request $request)
    {
        $name = $request->name;
        $request->validate([
            'name' => 'required | max:255',
            'price' => 'required | min:500 | integer',
            'category' => 'required | in:Recycled, Second-Hand',
            'description' => 'required |',
            'image' => 'required | file | image',
        ]);
        $product = Product::firstwhere('id', '=', $request->id);
        $productName = $product->image;
        if ($request->hasFile('image')) {
            $productName = $request->image->getClientOriginalName();
            $productFile = $request->file('image')->storeAs('image-product', $productName);
        } else {
            $productName = $product->image;
        }

        $product->id = $request->id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->image = $productName;
        $product->save();

        return redirect()->route('manageProduct');
    }
}
