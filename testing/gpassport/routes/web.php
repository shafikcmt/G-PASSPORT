<?php
use App\Http\livewire\StudentLoginRegisterComponent;
use App\Http\livewire\AdminDashboardComponent;
use App\Http\livewire\StudentDashboardComponent;
use App\Http\livewire\StudentListComponent;
use App\Http\livewire\ChangeProfileComponent;
use App\Http\livewire\StudentProfileComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',StudentLoginRegisterComponent::class);
Route::get('/admin',AdminDashboardComponent::class);
Route::get('/student',StudentDashboardComponent::class);
Route::get('/allstudentlist',StudentListComponent::class);
Route::get('/changeprofile',ChangeProfileComponent::class);
Route::get('/studentprofile',StudentProfileComponent::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
