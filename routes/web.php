<?php

use App\Http\Controllers\OficioController;
use App\Models\Oficio;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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
    return view('inicio');
})->name('inicio');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('inicio');
    })->name('dashboard');
 
    Route::get('/novo', function () {
         
       return view('novo'); 
    })->name('oficio.novo');

    Route::resource('oficio', OficioController::class);
     
});
Route::get('/pdf/{oficio}', function (Request $request, Oficio $oficio) {
    $pdf = App::make('dompdf.wrapper');
    // $pdf->loadView('oficio', ['oficio' => $oficio, 'user' => Auth::user(),]);
    $pdf->loadView('oficio', ['oficio' => $oficio, 'user' => User::find(11)]);
    return $pdf->stream();
})->name('pdf');