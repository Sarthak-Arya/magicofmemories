<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderPlacementController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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
    $products = [
        1=>[
            'id'=> 1,
            'name'=> 'Ring',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-4.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-1.jpg', 'images/products/product-2.jpg', 'images/products/product-3.jpg', 'images/products/product-5.jpg'],
            'tags' => ['ring', 'breast milk ring', 'cord ring', 'hair and breast milk ring'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ], 
2=>[
            'id'=> 2,
            'name'=> 'Pendants',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-pendant-2.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-pendant-1.jpg', 'images/products/product-pendant-3.jpg', 'images/products/product-4.jpg'],
            'tags' => ['blood pendant', 'breast milk pendant', 'cord pendant', 'hair and breast milk pendant'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ],
3=>[
            'id'=> 3,
            'name'=> 'Bracelets',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-bracelet-2.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-bracelet-1.jpg'],
            'tags' => ['blood pendant', 'breast milk pendant', 'cord pendant', 'hair and breast milk pendant'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ],
];
    return view('index', ['products'=> $products]);
})->name('index');;

Route::get('/about', function () {
    return ('About');
})->name('about');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::post('checkout', [OrderPlacementController::class, 'storeCustomerSessionData'])->name('checkout');


Route::get('/shop', function () {
    $products = [
        1=>[
            'id'=> 1,
            'name'=> 'Ring',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-4.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-1.jpg', 'images/products/product-2.jpg', 'images/products/product-3.jpg', 'images/products/product-5.jpg'],
            'tags' => ['ring', 'breast milk ring', 'cord ring', 'hair and breast milk ring'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ], 
2=>[
            'id'=> 2,
            'name'=> 'Pendants',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-pendant-2.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-pendant-1.jpg', 'images/products/product-pendant-3.jpg', 'images/products/product-4.jpg'],
            'tags' => ['blood pendant', 'breast milk pendant', 'cord pendant', 'hair and breast milk pendant'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ],
3=>[
            'id'=> 3,
            'name'=> 'Bracelets',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-bracelet-2.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-bracelet-1.jpg'],
            'tags' => ['blood pendant', 'breast milk pendant', 'cord pendant', 'hair and breast milk pendant'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ],
]; 
    return view('shop', ['products'=>$products]);
})->name('shop');

Route::get('/shop-product-id/{id}', function ($id) {
    $products = [
        1=>[
            'id'=> 1,
            'name'=> 'Ring',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-4.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-1.jpg', 'images/products/product-2.jpg', 'images/products/product-3.jpg', 'images/products/product-5.jpg'],
            'tags' => ['ring', 'breast milk ring', 'cord ring', 'hair and breast milk ring'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ], 
2=>[
            'id'=> 2,
            'name'=> 'Pendants',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-pendant-2.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-pendant-1.jpg', 'images/products/product-pendant-3.jpg', 'images/products/product-4.jpg'],
            'tags' => ['blood pendant', 'breast milk pendant', 'cord pendant', 'hair and breast milk pendant'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ],
3=>[
            'id'=> 3,
            'name'=> 'Bracelets',
            'description'=> 'Perfect for your',
            'imageUrl'=> 'images/products/product-bracelet-2.jpg',
            'price' => 79.00,
            'secondaryImages' => ['images/products/product-bracelet-1.jpg'],
            'tags' => ['blood pendant', 'breast milk pendant', 'cord pendant', 'hair and breast milk pendant'],
            'inclusions' => ['Hair', 'Cord', 'Tooth', 'Nail', 'Flower'],
            'metal' => ['Gold 14 Karat', 'Gold 18 Karat', 'Gold 22 Karat', 'Silver']
        ],
    ]; 
    
    return view('product', ['currentProduct'=>$products[$id]]);
})->whereNumber('id') ->name('product');



// Route::get('shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/shop-product-id/{id}', [OrderPlacementController::class, 'getData'])->name('product');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
    Route::get('dashboard', [ProductController::class, 'dashboard'])->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
   
    Route::get('/admin/productadd', function () {
		return view('tables/productsadd');
	})->name('tables.productadd');
    Route::post('/admin/productadd', [ProductController::class, 'create'])->name('tables.productadd');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');


