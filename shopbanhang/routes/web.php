<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangkyController;

Route::get('/', [FrontendController::class,'getHome']);

Route::get('detail/{id}/{slug}.html', [FrontendController::class,'getDetail']);
Route::post('detail/{id}/{slug}.html', [FrontendController::class,'postComment']); 

Route::get('category/{id}/{slug}.html', [FrontendController::class,'getCategory']);
Route::get('search', [FrontendController::class,'getSearch']);

Route::group(['prefix' => 'cart'],function(){
    Route::get('add/{id}', [CartController::class,'getAddCart']);
    Route::get('show', [CartController::class,'getShowCart']);
    Route::get('delete/{id}', [CartController::class,'getDeleteCart']);
    Route::get('update', [CartController::class,'getUpdateCart']);
    Route::post('show', [CartController::class,'postComplete']);
    // -------------------------------order-------------------------------
});

Route::get('complete', [CartController::class,'getComplete']);
Route::get('dangky', [DangkyController::class,'getDangky']);
Route::post('dangky', [DangkyController::class,'postDangky']);  

Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        route::get('/','LoginController@getLogin');
        route::post('/','LoginController@postLogin');  
      
    });
    route::get('logout','HomeController@getLogout');

    Route::group(['prefix'=>'admin'],function(){
        Route::get('home','HomeController@getHome');

        route::group(['prefix'=>'category'],function(){
            route::get('/','CategoryController@getCategory');
            route::post('/','CategoryController@postCategory');

            route::get('edit/{id}','CategoryController@getEditCate');
            route::post('edit/{id}','CategoryController@postEditCate');

            route::get('delete/{id}','CategoryController@getDeleteCate');
        });

        route::group(['prefix'=>'product'],function(){
            route::get('/','ProductController@getProduct');

            route::get('add','ProductController@getAddProduct');
            route::post('add','ProductController@postAddProduct');

            route::get('edit/{id}','ProductController@getEditProduct');
            route::post('edit/{id}','ProductController@postEditProduct');

            route::get('delete/{id}','ProductController@getDeleteProduct');
        });
        route::group(['prefix'=>'order'],function(){    
            Route::get('/', [OrderController::class,'getOrder']); 
            Route::get('edit/{id}', [OrderController::class,'getUpdateOrder']); 
            Route::post('edit/{id}', [OrderController::class,'postUpdateOrder']); 
        });
        route::group(['prefix'=>'comment'],function(){    
            Route::get('/', [CommentController::class,'getComment']); 
            Route::get('delete/{id}', [CommentController::class,'getDeleteComment']);             
        });
        
    });
});