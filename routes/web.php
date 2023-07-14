<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // $services = Service::();
    $services = Service::all();
    return view('index', compact("services"));
});

Route::get('/about', function () {
    $teams = teaminfo::all();
    return view('about', compact("teams"));
});

Route::get('/service', function () {
    $services = Service::all();
    return view('service', compact("services"));
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/appointment', function () {
    return view('appointment');
});
