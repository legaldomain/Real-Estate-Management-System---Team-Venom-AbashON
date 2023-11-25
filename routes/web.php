<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\PropertyTypeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Homepage frontend 
Route::get('/', [UserController::class, 'Index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');

    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
});

require __DIR__.'/auth.php';


//admin group middleware start (protected)

Route::middleware(['auth','role:admin'])->group(function(){

 Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

 Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

 Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');


 Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

 Route::get('/admin/addagent',[AdminController::class,'AdminAddAgent'])->name('admin.addagent');
 Route::post('/admin/addagent/submit', [AdminController::class, 'addagent'])->name('admin.addagent.submit');

}); //end grp admin middleware


//agent  group middleware start (protected)

Route::middleware(['auth','role:agent'])->group(function(){

 Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');

 Route::get('/agent/logout', [AgentController::class, 'AgentLogout'])->name('agent.logout');

 Route::get('/agent/profile', [AgentController::class, 'AgentProfile'])->name('agent.profile');


 Route::post('/agent/profile/store', [AgentController::class, 'AgentProfileStore'])->name('agent.profile.store');

 

}); //end agent middleware



Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/agent/login', [AgentController::class, 'AgentLogin'])->name('agent.login');

Route::get('/', [AdminController::class, 'AdminGoBack'])->name('home');
Route::get('/', [AgentController::class, 'AgentGoBack'])->name('home');


Route::middleware(['auth','role:admin'])->group(function(){

    // property type all route
    Route::controller(PropertyTypeController::class)->group(function(){
        Route::get('/all/type','AllType')->name('all.type');
        Route::get('/add/type','AddType')->name('add.type');
        Route::post('/store/type','StoreType')->name('store.type');
        Route::get('/edit/type/{id}','EditType')->name('edit.type');
        Route::post('/update/type','UpdateType')->name('update.type');
        Route::get('/delete/type/{id}','DeleteType')->name('delete.type');
        

    });
    
    //facility routes
    Route::controller(PropertyTypeController::class)->group(function(){
        Route::get('/all/facility','AllFacility')->name('all.facility');
        Route::get('/add/facility','AddFacility')->name('add.facility');
        Route::post('/store/facility','StoreFacility')->name('store.facility');
        //Route::get('/edit/facility/{id}','EditFacility')->name('edit.facility');
        //Route::post('/update/type','UpdateType')->name('update.type');
        //Route::get('/delete/type/{id}','DeleteType')->name('delete.type');
        

    });

   
   }); //end grp admin middleware


//agent  group middleware start (protected)

//Route::middleware(['auth','role:agent'])->group(function(){
        //agent property add
   // Route::controller(AgentPropertyController::class)->group(function(){
       // Route::get('/agent/all/addproperty',[AgentPropertyontroller::class,'AgentAddProperty'])->name('agent.all.property');

  //  });
   
  // }); //end agent middleware