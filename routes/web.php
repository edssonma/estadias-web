<?php
// use App\Http\Middleware\System\login;
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
    return view('index');
});

Route::post('getProjects','IndexController@getProjects');

Route::middleware(['auth'])->group(function () {

    //Accounts
    Route::get('createAccountView', 'Accounts\AccountsController@createAccountView');
    Route::post('registerNewAccount','Accounts\AccountsController@registerNewAccount');
    Route::post('registerNewServerAccount','Accounts\AccountsController@registerNewServerAccount');
    Route::post('registerAccountsFromExcel','Accounts\AccountsController@registerAccountsFromExcel');
    Route::get('deleteAccountView','Accounts\AccountsController@deleteAccountView');
    Route::post('deleteAccount','Accounts\AccountsController@deleteAccount');
    //Accounts-End

    //Databases
    Route::get('databasesView', 'Databases\DatabasesController@databasesView');
    Route::get('getUsers/{user}','Databases\DatabasesController@getUsers');
    Route::get('getDatabases/{user}','Databases\DatabasesController@getDatabases');
    //Databases-End

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
