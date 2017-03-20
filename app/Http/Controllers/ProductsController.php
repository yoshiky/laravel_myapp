<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Http\Controllers\Controller;


class ProductsController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->all();
        return view('products.index')->with(compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $inputs = \Request::all();
        if(!$this->product->validate($inputs))
        {
            return redirect()->back()->withInput()->withErrors($this->product->errors());
        }

        Product::create($inputs);
        return redirect('products');

    }
}
