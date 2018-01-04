<?php

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

// Frontend
Route::get('/', ['as' => 'home','uses' => 'Frontend\HomeController@index']);
Route::post('/contact.html', ['as' => 'send','uses' => 'Frontend\HomeController@store']);

Route::get('/our-vision.html', ['as' => 'our_vision.show','uses' => 'Frontend\PageController@getOurVision']);
Route::get('/what-we-do.html', ['as' => 'what_we_do.show','uses' => 'Frontend\PageController@getWhatWeDo']);
Route::get('/case-study.html', ['as' => 'case_study.show','uses' => 'Frontend\PageController@getCaseStudy']);
Route::get('/contact.html', ['as' => 'contact.show','uses' => 'Frontend\PageController@getContact']);


Route::get('/clients.html', ['as' => 'clients','uses' => 'Frontend\PageController@getClients']);
//Route::get('/contact', function () {
//    return view('theme/contact');
//});
Route::get('/login', function (){});
Route::get('/{slug_cate}', ['as' => 'blog_cate', 'uses' => 'Frontend\PageController@getBlogCates']);
Route::get('/blog/{slug}', ['as' => 'blog', 'uses' => 'Frontend\PageController@getBlogs']);

// Backend
Route::group(['prefix' => 'admin'],function(){
    Route::auth();
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
    Route::get('home', 'Backend\HomeController@index');
    Route::post('/upload', ['as' => 'upload', 'uses' => 'Backend\UploadController@store']);
    Route::group(['prefix' => 'banners'], function (){
        Route::get('/', ['as' => 'banner.index', 'uses' => 'Backend\BannerController@index']);
        Route::get('/create', ['as' => 'banner.create', 'uses' => 'Backend\BannerController@create']);
        Route::get('/detail/{id}', ['as' => 'banner.detail', 'uses' => 'Backend\BannerController@show']);
        Route::post('/add', ['as' => 'banner.add', 'uses' => 'Backend\BannerController@store']);
        Route::post('/update/{id}', ['as' => 'banner.update', 'uses' => 'Backend\BannerController@update']);
        Route::get('/{id}',['as' => 'banner.delete', 'uses' => 'Backend\BannerController@destroy']);
    });
    Route::group(['prefix' => 'post_categories'], function (){
        Route::get('/', ['as' => 'postCate.index', 'uses' => 'Backend\PostCategoryController@index']);
        Route::get('/create', ['as' => 'postCate.create', 'uses' => 'Backend\PostCategoryController@create']);
        Route::get('/detail/{id}', ['as' => 'postCate.detail', 'uses' => 'Backend\PostCategoryController@show']);
        Route::post('/add', ['as' => 'postCate.add', 'uses' => 'Backend\PostCategoryController@store']);
        Route::post('/update/{id}', ['as' => 'postCate.update', 'uses' => 'Backend\PostCategoryController@update']);
        Route::get('/{id}',['as' => 'postCate.delete', 'uses' => 'Backend\PostCategoryController@destroy']);
    });
    Route::group(['prefix' => 'posts'], function (){
        Route::get('/', ['as' => 'post.index', 'uses' => 'Backend\PostController@index']);
        Route::get('/create', ['as' => 'post.create', 'uses' => 'Backend\PostController@create']);
        Route::get('/detail/{id}', ['as' => 'post.detail', 'uses' => 'Backend\PostController@show']);
        Route::post('/add', ['as' => 'post.add', 'uses' => 'Backend\PostController@store']);
        Route::post('/update/{id}', ['as' => 'post.update', 'uses' => 'Backend\PostController@update']);
        Route::get('/{id}',['as' => 'post.delete', 'uses' => 'Backend\PostController@destroy']);
    });
    Route::group(['prefix' => 'contacts'], function (){
        Route::get('/', ['as' => 'contact.index', 'uses' => 'Backend\ContactController@index']);
        Route::get('/detail/{id}', ['as' => 'contact.detail', 'uses' => 'Backend\ContactController@show']);
        Route::get('/{id}',['as' => 'contact.delete', 'uses' => 'Backend\ContactController@destroy']);
    });

    Route::group(['prefix' => 'config'], function (){
        Route::get('/', ['as' => 'config.index', 'uses' => 'Backend\ConfigController@index']);
//        Route::get('/create', ['as' => 'config.create', 'uses' => 'Backend\ConfigController@create']);
        Route::get('/detail/{id}', ['as' => 'config.detail', 'uses' => 'Backend\ConfigController@show']);
//        Route::post('/add', ['as' => 'config.add', 'uses' => 'Backend\ConfigController@store']);
        Route::post('/update/{id}', ['as' => 'config.update', 'uses' => 'Backend\ConfigController@update']);
//        Route::get('/{id}',['as' => 'config.delete', 'uses' => 'Backend\ConfigController@destroy']);
    });
    Route::group(['prefix' => 'galleries'], function (){
        Route::get('/', ['as' => 'gallery.index', 'uses' => 'Backend\GalleryController@index']);
        Route::get('/create', ['as' => 'gallery.create', 'uses' => 'Backend\GalleryController@create']);
        Route::get('/detail/{id}', ['as' => 'gallery.detail', 'uses' => 'Backend\GalleryController@show']);
        Route::post('/add', ['as' => 'gallery.add', 'uses' => 'Backend\GalleryController@store']);
        Route::post('/update/{id}', ['as' => 'gallery.update', 'uses' => 'Backend\GalleryController@update']);
        Route::get('/{id}',['as' => 'gallery.delete', 'uses' => 'Backend\GalleryController@destroy']);
    });

    Route::group(['prefix' => 'home-managements'], function (){
        Route::get('/', ['as' => 'home_management.index', 'uses' => 'Backend\HomeManagementController@index']);
        Route::get('/create', ['as' => 'home_management.create', 'uses' => 'Backend\HomeManagementController@create']);
        Route::get('/detail/{id}', ['as' => 'home_management.detail', 'uses' => 'Backend\HomeManagementController@show']);
        Route::post('/add', ['as' => 'home_management.add', 'uses' => 'Backend\HomeManagementController@store']);
        Route::post('/update/{id}', ['as' => 'home_management.update', 'uses' => 'Backend\HomeManagementController@update']);
        Route::get('/{id}',['as' => 'home_management.delete', 'uses' => 'Backend\HomeManagementController@destroy']);
    });

    Route::group(['prefix' => 'what-we-do-managements'], function (){
        Route::get('/', ['as' => 'what_we_do_management.index', 'uses' => 'Backend\WhatWeDoManagementController@index']);
        Route::get('/create', ['as' => 'what_we_do_management.create', 'uses' => 'Backend\WhatWeDoManagementController@create']);
        Route::get('/detail/{id}', ['as' => 'what_we_do_management.detail', 'uses' => 'Backend\WhatWeDoManagementController@show']);
        Route::post('/add', ['as' => 'what_we_do_management.add', 'uses' => 'Backend\WhatWeDoManagementController@store']);
        Route::post('/update/{id}', ['as' => 'what_we_do_management.update', 'uses' => 'Backend\WhatWeDoManagementController@update']);
        Route::get('/{id}',['as' => 'what_we_do_management.delete', 'uses' => 'Backend\WhatWeDoManagementController@destroy']);
    });

    Route::group(['prefix' => 'case-study-managements'], function (){
        Route::get('/', ['as' => 'case_study_management.index', 'uses' => 'Backend\CaseStudyManagementController@index']);
        Route::get('/create', ['as' => 'case_study_management.create', 'uses' => 'Backend\CaseStudyManagementController@create']);
        Route::get('/detail/{id}', ['as' => 'case_study_management.detail', 'uses' => 'Backend\CaseStudyManagementController@show']);
        Route::post('/add', ['as' => 'case_study_management.add', 'uses' => 'Backend\CaseStudyManagementController@store']);
        Route::post('/update/{id}', ['as' => 'case_study_management.update', 'uses' => 'Backend\CaseStudyManagementController@update']);
        Route::get('/{id}',['as' => 'case_study_management.delete', 'uses' => 'Backend\CaseStudyManagementController@destroy']);
    });

    Route::group(['prefix' => 'our-vision-managements'], function (){
        Route::get('/', ['as' => 'our_vision_management.index', 'uses' => 'Backend\OurVisionManagementController@index']);
        Route::get('/create', ['as' => 'our_vision_management.create', 'uses' => 'Backend\OurVisionManagementController@create']);
        Route::get('/detail/{id}', ['as' => 'our_vision_management.detail', 'uses' => 'Backend\OurVisionManagementController@show']);
        Route::post('/add', ['as' => 'our_vision_management.add', 'uses' => 'Backend\OurVisionManagementController@store']);
        Route::post('/update/{id}', ['as' => 'our_vision_management.update', 'uses' => 'Backend\OurVisionManagementController@update']);
        Route::get('/{id}',['as' => 'our_vision_management.delete', 'uses' => 'Backend\OurVisionManagementController@destroy']);
    });
});
