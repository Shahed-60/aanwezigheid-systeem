<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AanwezigheidController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/create', function () {
    return view('create');
})->middleware(['auth', 'verified'])->name('create');

//routes voor het sturen naar de database
route::post('student/toevoegen', ['StudentController::class, StudentToevoegen'])->name('StudentToevoegen');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/aanwezigheid', [AanwezigheidController::class, 'index'])->name('aanwezigheid.index');
Route::post('/aanwezigheid', [AanwezigheidController::class, 'store'])->name('aanwezigheid.store');
require __DIR__ . '/auth.php';
