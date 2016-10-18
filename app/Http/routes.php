<?php

/****************   Model binding into route **************************/
Route::model('article', 'App\Article');
Route::model('articlecategory', 'App\ArticleCategory');
Route::model('language', 'App\Language');
Route::model('photoalbum', 'App\PhotoAlbum');
Route::model('photo', 'App\Photo');
Route::model('user', 'App\User');
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('articles', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::get('video/{id}', 'VideoController@show');
Route::get('photo/{id}', 'PhotoController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    # Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');

    # Language
    Route::get('language/data', 'Admin\LanguageController@data');
    Route::get('language/{language}/show', 'Admin\LanguageController@show');
    Route::get('language/{language}/edit', 'Admin\LanguageController@edit');
    Route::get('language/{language}/delete', 'Admin\LanguageController@delete');
    Route::resource('language', 'Admin\LanguageController');
Route::get('jobpost','DesignController@jobpost');
    # Article category
    Route::get('articlecategory/data', 'Admin\ArticleCategoriesController@data');
    Route::get('articlecategory/{articlecategory}/show', 'Admin\ArticleCategoriesController@show');
    Route::get('articlecategory/{articlecategory}/edit', 'Admin\ArticleCategoriesController@edit');
    Route::get('articlecategory/{articlecategory}/delete', 'Admin\ArticleCategoriesController@delete');
    Route::get('articlecategory/reorder', 'ArticleCategoriesController@getReorder');
    Route::resource('articlecategory', 'Admin\ArticleCategoriesController');

    # Articles
    Route::get('article/data', 'Admin\ArticleController@data');
    Route::get('article/{article}/show', 'Admin\ArticleController@show');
    Route::get('article/{article}/edit', 'Admin\ArticleController@edit');
    Route::get('article/{article}/delete', 'Admin\ArticleController@delete');
    Route::get('article/reorder', 'Admin\ArticleController@getReorder');
    Route::resource('article', 'Admin\ArticleController');

    # Photo Album
    Route::get('photoalbum/data', 'Admin\PhotoAlbumController@data');
    Route::get('photoalbum/{photoalbum}/show', 'Admin\PhotoAlbumController@show');
    Route::get('photoalbum/{photoalbum}/edit', 'Admin\PhotoAlbumController@edit');
    Route::get('photoalbum/{photoalbum}/delete', 'Admin\PhotoAlbumController@delete');
    Route::resource('photoalbum', 'Admin\PhotoAlbumController');

    # Photo
    Route::get('photo/data', 'Admin\PhotoController@data');
    Route::get('photo/{photo}/show', 'Admin\PhotoController@show');
    Route::get('photo/{photo}/edit', 'Admin\PhotoController@edit');
    Route::get('photo/{photo}/delete', 'Admin\PhotoController@delete');
    Route::resource('photo', 'Admin\PhotoController');

    # Users
    Route::get('user/data', 'Admin\UserController@data');
    Route::get('user/{user}/show', 'Admin\UserController@show');
    Route::get('user/{user}/edit', 'Admin\UserController@edit');
    Route::get('user/{user}/delete', 'Admin\UserController@delete');
    Route::resource('user', 'Admin\UserController');




});



Route::get('eform', 'CareerHuntController@eform');

Route::get('signup','JobSeekerController@signup');
Route::get('jssignup','JobSeekerController@jssignup');
Route::get('jsprofile/{id}','JobSeekerController@jsprofile');

Route::get('emsignup','EmployerController@emsignup');
Route::get('emprofile/{id}','EmployerController@emprofile');

Route::get('login','JobSeekerController@login');

Route::get('jobs','EmployerController@jobs');

Route::get('show/{id}','EmployerController@show');
Route::get('show/{id}/empedit','EmployerController@empedit');
Route::post('empupdate/{id}','EmployerController@empupdate');
Route::post('emprofile/empstore','EmployerController@store'); 

Route::post('jsprofile/storejobseeker','JobSeekerController@storejobseeker');
Route::get('showjobseeker/{id}','JobSeekerController@showjobseeker');
Route::post('jsprofile/rpstore','JobSeekerController@rpstore');

Route::post('store2','DesignController@store2');

Route::post('estore','EmployerController@estore');
Route::post('jobstore','EmployerController@jobstore');
Route::get('jobshow','EmployerController@jobshow');

Route::post('jstore','JobSeekerController@jstore');
//Route::get('jstore','DesignController@jstore');

Route::post('loginsite','DesignController@loginsite');
//Route::post('logsite','DesignController@loginsite');
Route::post('jsprofile/coursestore','JobSeekerController@coursestore');
Route::post('jsprofile/edustore','JobSeekerController@edustore');
Route::post('jsprofile/jobexp_store','JobSeekerController@jobexp_store');
Route::post('jsprofile/seminar_store','JobSeekerController@seminar_store');
Route::post('jsprofile/award_store','JobSeekerController@award_store');
Route::post('jsprofile/volunteer_store','JobSeekerController@volunteer_store');


Route::post('h','PagesController@about');
Route::post('queries','SearchController@search');
Route::resource('home1','PagesController@home1');

Route::get('index','JobSeekerController@index');
Route::get('jsprofile/index2','EmployerController@index2');
Route::get('index2','EmployerController@index2');
Route::get('index3','DesignController@index3');
Route::get('jobpost','EmployerController@jobpost');

Route::post('Postupdate/{id}','EmployerController@Postupdate');

Route::get('jsprofile/edustore','JobSeekerController@edustore');

Route::get('jobshow/{id}/jobedit','EmployerController@jobedit');
Route::get('jobshow/{id}','EmployerController@Postshow');

Route::get('emdashboard/{id}','EmployerController@emdashboard');
//Route::get('emdashbord','EmployerController@emdashbord');
Route::get('jsdashboard','JobSeekerController@jsdashboard');
Route::get('emprofile2','EmployerController@emprofile2');
Route::resource('design','DesignController');

        
     Route::post('emdashboard/jobstore','EmployerController@jobstore');   
        
Route::get('search','SearchController@search');  

Route::get('jseducationshow/{id}','JobSeekerController@jseducationshow');
Route::get('jsrespubshow','JobSeekerController@jsrespubshow');
Route::get('jscertificateshow','JobSeekerController@jscertificateshow');
Route::get('jsjobshow','JobSeekerController@jsjobshow');
Route::get('jsseminarshow','JobSeekerController@jsseminarshow');
Route::get('jsawardshow','JobSeekerController@jsawardshow');
Route::get('jsvolunteershow','JobSeekerController@jsvolunteershow');
Route::get('jsotherinfoshow','JobSeekerController@jsotherinfoshow');

Route::get('emplogin','EmployerController@emplogin');
Route::get('jslogin','JobSeekerController@jslogin');




//Route::group(['middleware' => 'auth'], function() {



Route::get('jscv','JobSeekerController@jscv');

Route::resource('users', 'UsersController', array('only' => array('show')));
Route::post('login', 'UsersController@login');
Route::post('make', 'UsersController@register');
Route::get('logout', 'UsersController@logout')->name('logout');
Route::post('resetPassword/{id}','UsersController@resetPassword');

//});

//Route::resource('users','DesignController');
/*Route::group(array('before' => 'auth'), function()
{
    Route::get('hud', 'HomeController@index')->name('hud');
    Route::get('search', 'HomeController@search')->name('search');
    Route::get('profile', 'UsersController@index')->name('profile');
    Route::get('clients', 'ClientsController@index')->name('clients');
    Route::delete('clients/{id}', 'ClientsController@destroy');
    Route::resource('projects', 'ProjectsController', array('only' => array('show')));


//  Route::delete('projects/{id}/remove', array('uses' => 'ProjectsController@remove', 'as' => 'projects.remove') );
//    Route::get('projects/{id}/files', array('uses' => 'ProjectsController@files', 'as' => 'projects.files' ));
//    Route::post('projects/{id}/files', array('uses' => 'FilesController@store', 'as' => 'files.store' ));
//    Route::delete('projects/{id}/files', array('uses' => 'FilesController@destroy', 'as' => 'files.remove' ));
});*/
















