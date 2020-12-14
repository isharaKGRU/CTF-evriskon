<?php

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

Route::get('/', function () {
    return view('home');
});


Route::get('/mis1', function () {
    return view('mis1');
});

Route::get('/mis2', function () {
    return view('mis2');
});

Route::get('/mis3', function () {
    return view('mis3');
});

Route::get('/mis4', function () {
    return view('mis4');
});

Route::get('/mis5', function () {
    return view('mis5');
});

Route::get('/mis6', function () {
    return view('mis6');
});

Route::get('/mis7', function () {
    return view('mis7');
});

Route::get('/mis8', function () {
    return view('mis8');
});

Route::get('/mis9', function () {
    return view('mis9');
});

Route::get('/mis10', function () {
    return view('mis10');
});

Route::middleware(['auth:sanctum', 'verified','authmis1'])->get('mis1/dashboard', function () {
    return view('mis1.mis1success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis2'])->get('mis2/dashboard', function () {
    return view('mis2.mis2success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis3'])->get('mis3/dashboard', function () {
    return view('mis3.mis3success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis4'])->get('mis4/dashboard', function () {
    return view('mis4.mis4success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis5'])->get('mis5/dashboard', function () {
    return view('mis5.mis5success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis6'])->get('mis6/dashboard', function () {
    return view('mis6.mis6success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis7'])->get('mis7/dashboard', function () {
    return view('mis7.mis7success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis8'])->get('mis8/dashboard', function () {
    return view('mis8.mis8success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis9'])->get('mis9/dashboard', function () {
    return view('mis9.mis9success');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authmis10'])->get('mis10/dashboard', function () {
    return view('mis10.mis10success');
})->name('dashboard');


Route::group(['middleware' => ['auth', 'verified','authmis4']], function ()
	{
      Route::get('mis4/secret.txt', function ()    {
        return view('mis4.secret');
    });
    });


Route::group(['middleware' => ['auth', 'verified','authmis5']], function ()
	{
		Route::get('/mis5/download', function(){
      		$file = public_path()."/key5.rar";
      		$headers = array(
      			'Content-Type: application/rar',
      		);

      		return Response::download($file, "key.rar", $headers);
    	});
    });