<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->paginate(8);

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        Product::query()->create($request->all());

        return redirect()->to('/admin/product/index');
    }

    public function edit($id)
    {
        $product = Product::query()->find($id);
        if (!$product) abort(404);

        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::query()->find($id);
        if (!$product) abort(404);
        $product->name = $request->name;
        $product->cost_per_kwh = (float) str_replace('R$ ', '', $request->cost_per_kwh);
        $product->save();
        return redirect()->to('/admin/product/index');
    }
}
