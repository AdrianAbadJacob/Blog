<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\EntradaController;
use App\Models\Entrada;
use App\Models\Libro;
use Illuminate\Http\Request;
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
   
    $entradas =Entrada::orderBy('id','desc')->get();
   
    return view('welcome',compact('entradas'));
   
});

Route::post("user",[UserLogin::class,'userLogin']);
Route::view('login','login');
Route::get('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route:: get("/entradas",function(){
    $entradas= Entrada::orderBy('id','desc')->get();

    foreach($entradas as $entrada){
        echo "<br>". $entrada->usuario ." : ";
        echo $entrada->entrada;
    };
});

Route::post("/insertar",function(Request $request){
    $entradas= new Entrada;
    $entradas->usuario=$request->name;
    $entradas->entrada=$request->entrada;

    $entradas->save();

    $user=Auth::user();
    $entradas =Entrada::orderBy('id','desc')->get();
   
    return view('home',compact('user'),compact('entradas'));
});
Route::resource('entradas','EntradaController');

Route:: get("/bio",function(){
    $user=Auth::user();
    return view('bio',compact('user'));
});


Route::get("/libros",function(){
    $libros= new Libro;
    

    $user=Auth::user();
    $libros =Libro::orderBy('id','asc')->get();
   
    return view('libros',compact('user'),compact('libros'));
});

Route::get("/libros/{id}",function(Request $request,$id){
    $libros= new Libro;
    

    $user=Auth::user();
    $libros =Libro::where('id',$id)->get();
   
    return view('libro',compact('user'),compact('libros'));
});

