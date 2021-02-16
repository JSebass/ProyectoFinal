<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FerreteriaController;
use App\Http\Controllers\productos;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
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

Route::get('/',[FerreteriaController::class,'getIndex'] );
Route::get('/test',function(){
/*    
    return   Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrator',
        'full-access' => 'yes'
    ]);
      return   Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'guest',
        'full-access' => 'no'
    ]);
    
    return   Role::create([
        'name' => 'test',
        'slug' => 'test',
        'description' => 'test',
        'full-access' => 'no'
    ]);*/
    


    //$user = User::find(1);

    /*
        en: create new record
        es: crea un nuevo registro
    */ 
    //$user->roles()->attach([1,2,3]);  

    /*
        en: delete new record
        es: delete un nuevo registro
    */ 

    //$user->roles()->detach([3]);


    /*
        en: removes from the database the roles that are not in the array as well as creates those records that are not in the database.
        es: elimina de la base de datos los roles que no estén en el array asi como tambien crea aquellos registros que no estén en la base de datos.
    */ 
    //$user->roles()->sync([1,2]);

    //return $user->roles;
    /* return   Permission::create([
        'name' => 'Crear producto',
        'slug' => 'productos.crear',
        'description' => 'el ususario puede crear producto',
        
    ]);*/
    $role = Role::find(1);

    $role->permissions()->sync([1,2]);

    return $role->permissions;
});

Route::get('nosotros/historia', [FerreteriaController::class,'showHistoria'] );

Route::get('nosotros/vision', [FerreteriaController::class,'showMision'] );

Route::get('nosotros/ubicacion', [FerreteriaController::class,'showUbicacion']);

Route::get('registro/registrar', [FerreteriaController::class,'showregistro']);
Route::get('visualizar', [productos::class,'showprod']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
