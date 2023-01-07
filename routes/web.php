<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

View::addExtension('html', 'php');


Route::get('/', function () {
    $products = [1=>[
        'id'=> 1,
        'name'=> 'Breast Milk Ring',
        'type'=> 'Ring',
        'imageUrl'=> 'images/home-product-1.jpg',
        'price' => 29.00
    ],
    2=>[
        'id'=> 2,
        'name'=> 'Breast Milk Pendant',
        'type'=> 'Pendant',
        'imageUrl'=> 'images/home-product-2.jpg',
        'price' => 79.00
    ],
    3=>[
        'id'=> 3,
        'name'=> 'Breast Milk and Hair Pendant',
        'type'=> 'Pendant',
        'imageUrl'=> 'images/home-product-2.jpg',
        'price' => 79.00
    ],
];
    return view('index', ['products'=> $products]);
})->name('index');;

Route::get('/about', function () {
    return ('About');
})->name('about');

Route::get('/shop', function () {
    return ('Shop');
})->name('shop');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return ("Contact");
})->name('contact');


// Route::view('/idk', 'idk');