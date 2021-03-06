<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    function add_product(){

        return view('addProduct');
    }
    function product_list(){
        $products = product::all();

        return view('productList')->with('products', $products);
    }
    function added(Request $req){

        $req->validate([
            'name'=> 'required|max:20',
            'price'=> 'required|max:10'
        ],
        [
            'name.required'=>'Product name is empty!',
            'price.required'=>'Provide your product price.'
        ]
        );
        $pd = new product();
        $pd->Name = $req->name;
        $pd->Price = $req->price;
        $pd->save();
        return  "Product Added";
    }

    function productDetail($id, $name, $price){

        return "<h1>Product ID: $id <br> Product Name: $name <br> Product Price: $price </h1>" ;
    }
}
