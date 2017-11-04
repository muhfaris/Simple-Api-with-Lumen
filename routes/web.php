<?php

<<<<<<< HEAD
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('page/add', 'PageController@create');
Route::get('page/{page}/delete', [
    'as'   => 'page.delete',
    'uses' => 'PageController@destroy',
]);
Route::resource('/page', 'PageController');


function is_active_sorter($key, $direction = 'ASC')
{
    if (request('sortby') == $key && request('sortdir') == $direction) {
        return true;
    }

    return false;
}

=======
/*
|--------------------------------------------------------------------------
| $routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an $routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/api', function () use ($router) {
    return "Lumen RESTful API :";
});

$router->get('api/v1/contact','ContactController@index');
$router->get('api/v1/contact/{id}','ContactController@getContact'); 
$router->post('api/v1/contact','ContactController@createContact');
$router->put('api/v1/contact/{id}','ContactController@updateContact');
$router->delete('api/v1/contact/{id}','ContactController@deleteContact'); 


 
>>>>>>> lumenContainer

