<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        foreach ($products as $product){
            $product->description = $this->shorterText($product->description, 75);
        }
        return view('shop.index', ['products' => $products]);
    }


    public function shorterText($text, $chars_limit){
        if(strlen($text) > $chars_limit){
            $new_text = substr($text, 0, $chars_limit);
            $new_text = trim($new_text);

            return $new_text;
        }else{
            return $text;
        }
    }
}
