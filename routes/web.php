<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// $arr =   ['key' => 'value'];
// $json =   (object)['key' => 'value'];


// $arr['key']

// $json->key

//GET /admin///POST

// uri                  controller method    name
//GET posts             //index       posts.index
//GET posts/create      //create      posts.create //show form
//POST posts            //store       posts.store
//GET posts/{id}          show        posts.show
//GET posts/{id}/edit                 posts.edit         //show form
//PATCH/PUT posts/{id}/update         posts.edit
//DELETE posts/{id}                   posts.destroy


//query params
//index.php?id=10&user=mohamed

//route params
//posts/{id}/users/{user}


/*
request methods
GET //get data (read, edit)
POST //store data
PUT //update data
PATCH //update data
DELETE //delete data
OPTIONS //request access //204

CORS
cros origin
*/
