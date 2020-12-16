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
      Route::get('mis4/key.txt', function ()    {
        return view('mis4.secret');
    });
      Route::get('mis4/home.php', function ()    {
        return view('mis4.home1');
    });
      Route::get('mis4/log.php', function ()    {
        return view('mis4.log');
    });
    });


Route::group(['middleware' => ['auth', 'verified','authmis5']], function ()
	{
		Route::get('/mis5/download', function(){
      		$file = public_path()."/Key6.rar";
      		$headers = array(
      			'Content-Type: application/rar',
      		);

      		return Response::download($file, "key.rar", $headers);
    	});
    });

Route::group(['middleware' => ['auth', 'verified','authmis8']], function ()
	{
      Route::get('mis8/key.txt', function ()    {
        return view('mis8.key');
    });
      Route::get('mis8/pass', function ()    {
        return view('mis8.pass');
    });
      Route::get('/mis8/download', function(){
      		$file = public_path()."/Pass9.rar";
      		$headers = array(
      			'Content-Type: application/rar',
      		);

      		return Response::download($file, "pass.rar", $headers);
    	});
      Route::get('mis8/error', function ()    {
        return view('mis8.error');
    });
      Route::get('mis8/blah', function ()    {
        return view('mis8.blah');
    });
    });

Route::group(['middleware' => ['auth', 'verified','authmis9']], function ()
	{
      Route::get('mis9/key', function ()    {
        return view('mis9.key10');
    });
      Route::get('mis9/pass', function ()    {
        return view('mis9.pass10');
    });
      Route::get('/mis9/download', function(){
      		$file = public_path()."/Cry-DES-9.hex";
      		$headers = array(
      			'Content-Type: application/hex',
      		);

      		return Response::download($file, "pass.hex", $headers);
    	});
     
    });

Route::group(['middleware' => ['auth', 'verified','authmis10']], function ()
	{
		Route::get('/mis10/download', function(){
      		$file = public_path()."/img/location.jpg";
      		$headers = array(
      			'Content-Type: application/jpg',
      		);

      		return Response::download($file, "location.jpg", $headers);
    	});
    	Route::get('mis10/location', function ()    {
        return view('mis10.location');
    });
    });
