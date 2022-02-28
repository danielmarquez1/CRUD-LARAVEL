 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeworksController;

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

// DIFINIR LA RUTA
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layout.index');
})->name('home');

Route::get('/service', function () {
    return 'Hola a todos desde esta ruta';
});

//RUTA

//OBTEBER LA INFORMACION DE LA TABLA
Route::get('/home',[HomeworksController::class, 'index'])->name('show-task');

//AGREGAR LA INFORMACION DE LA TABLA
Route::post('/home',[HomeworksController::class, 'store'])->name('addtask');

//
Route::patch('/home',[HomeworksController::class, 'store'])->name('homeworks-edit');
Route::delete('/home',[HomeworksController::class, 'store'])->name('homeworks-destroy');