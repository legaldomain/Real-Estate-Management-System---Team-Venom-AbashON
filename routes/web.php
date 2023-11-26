<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\PropertyController;



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

//Homepage frontend 
Route::get('/', [UserController::class, 'Index']);




#Route::get('/dashboard', function () {
   # return view('dashboard');
#})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirects',[ProfileController::class,"index"]);

Route::post('/addagent',[ProfileController::class,"addagent"]);

Route::middleware(['auth', 'verified'])->get('/dashboard',[ProfileController::class,"index"])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');

    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    

});

require __DIR__.'/auth.php';

Route::get('/add-agent-form', [ProfileController::class,'showAddAgentForm'])->name('add.agent.form');
