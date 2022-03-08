<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', function (){
    return Post::all();
});

Route::get('posts/{id}', function ($id){
    return Post::find($id);
});

Route::post('posts', function (Request $request){
    return Post::create($request->all());
});

Route::put('posts/{id}', function (Request $request, $id){
    $post = Post::findOrFail($id);
    $post->update($request->all());

    return $post;
});

Route::delete('posts/{id}', function ($id){
   Post::find($id)->delete();

   return 204;
});
