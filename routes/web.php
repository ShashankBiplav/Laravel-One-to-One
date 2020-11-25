<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Address;

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
    return view('welcome');
});

//insert data into database
Route::get('/insert', function(){
    $user = User::findOrFail(1);
    $address = new Address(['address'=> 'L.I.C colony, Bahadurpur.']);

    $user->address()->save($address);

});

//updating data
Route::get('/update', function (){
    $address = Address::where('user_id', 1)->first();
    $address->address = "Updated New Address: Updated Colony";
    $address->save();
});
