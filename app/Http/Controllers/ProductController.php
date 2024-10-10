<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'title'         => 'product 1',
                'description'   => 'this description for product number 1',
                'price'         => 200,
                'offer'         => 100
            ],
            [
                'title'         => 'product 2',
                'description'   => 'this description for product number 2',
                'price'         => 400,
                'offer'         => 300
            ],
            [
                'title'         => 'product 3',
                'description'   => 'this description for product number 3',
                'price'         => 500
            ]
            ];

        return view('site.products.index', compact('products'));
    }

    public function show($product) {

        $products = [
            [
                'title'         => 'product 1',
                'description'   => 'this description for product number 1',
                'price'         => 200,
                'offer'         => 100
            ],
            [
                'title'         => 'product 2',
                'description'   => 'this description for product number 2',
                'price'         => 400,
                'offer'         => 300
            ],
            [
                'title'         => 'product 3',
                'description'   => 'this description for product number 3',
                'price'         => 500
            ]
            ];

            abort_if(!isset($products[$product]), 404);

            $product = $products[$product];

        return view('site.products.show', compact('product'));
    }

    public function create()
    {
        return view('site.products.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
