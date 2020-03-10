<?php

use App\bestArticles;
use App\bestCourse;
use App\HomePageHelper;
use App\Statement;
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

Route::get('/', function(){
    return response()->json("HI, I'm working");
});

Route::get('/courses/{id}', function($id){
    $rec=bestCourse::where('id',$id)->get();
    return response()->json($rec);
});

Route::get('/home/{tag}',function ($tag){
    $res=[
        HomePageHelper::bestCourses($tag),
        HomePageHelper::bestArticle(),
        HomePageHelper::statements()
    ];
   return response()->json($res);
});


Route::get('/courses/tags',function (){
    $rec=bestCourse::where()->get();
    return response()->json($rec);
});



Route::get('/statements/{id}',function ($id){
    $rec=Statement::where('id',$id)->get();
    return response()->json($rec);
});
