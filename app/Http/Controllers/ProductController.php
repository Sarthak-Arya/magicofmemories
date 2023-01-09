<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Request;
// use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
 
class ProductController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function shop()
    {
        $products = DB::table('products')->get();
        return view('shop', ['products' => $products]);
    }
    public function dashboard()
    {
        $products = DB::table('products')->get();
        return view('dashboard', ['products' => $products]);
    }
    
    public function create(){
        DB::table('products')->insert(
            ['name' => Request::get('name'),
            'price_min_range' => Request::get('price_min_range'),
            'price_max_range' => Request::get('price_max_range'),
            'description' => Request::get('description'),
            'main_product_image' => Request::get('main_product_image')]
        );
            
        // $product->save();
    }
}

?>