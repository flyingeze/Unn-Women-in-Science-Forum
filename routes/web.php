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

Route::get('/', 'FrontEndController@home')->name('home');
Route::get('/topic', 'FrontEndController@topics')->name('topics');
Route::get('/faq', 'FrontEndController@faq')->name('faq');
Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/contact', 'FrontEndController@contact')->name('contact');
Route::get('/member/{reg_no}', 'FrontEndController@member'); 
 

Route::get('/my-topics', 'BackEndController@mytopics')->name('mytopics');
Route::post('/my-topics/{topic_id}', 'BackEndController@member_delete_mytopic');
Route::get('/mytopic/{topic_id}/edit', 'BackEndController@editmytopics');
Route::post('/mytopic/{topic_id}/edit', 'BackEndController@member_edit_topic');
Route::get('/new-topics', 'HomeController@new_topics')->name('new-topics');
Route::post('/new-topics', 'BackEndController@new_topics')->name('new-topics');
Route::get('/myreplies', 'BackEndController@myreplies')->name('myreplies');
Route::post('/myreplies/{id}', 'BackEndController@delete_myreplies');

Route::get('/setting', 'BackEndController@settings')->name('settings');
Route::post('/setting', 'BackEndController@updateprofile')->name('updateprofile');

Route::get('/admin', 'BackEndController@siteinfo')->name('admin')->middleware(['auth','auth.admin']);

Route::get('/admin/topics', 'BackEndController@admintopics')->name('admintopics')->middleware(['auth','auth.admin']);
Route::post('/admin/topics/{topic_id}', 'BackEndController@admin_delete_topic')->middleware(['auth','auth.admin']);

Route::get('/admin/replies', 'BackEndController@adminreplies')->name('adminreplies')->middleware(['auth','auth.admin']);
Route::post('/admin/replies/{id}', 'BackEndController@delete_replies')->middleware(['auth','auth.admin']);

Route::get('/admin/members', 'BackEndController@members')->name('members')->middleware(['auth','auth.admin']);
Route::post('/admin/members/{id}', 'BackEndController@delete_members')->middleware(['auth','auth.admin']);

Route::get('/admin/setting', 'BackEndController@site_settings')->name('site_settings')->middleware(['auth','auth.admin']);
Route::post('/admin/setting', 'BackEndController@updatesiteinfo')->name('update_site_info')->middleware(['auth','auth.admin']);

//Admin Department Routes
    Route::get('/admin/department', 'BackEndController@department')->name('department')->middleware(['auth','auth.admin']);
    Route::get('/admin/department/new', 'BackEndController@newdepartment')->name('newdepartment')->middleware(['auth','auth.admin']);
    Route::post('/admin/department/new', 'BackEndController@new_department')->name('new-department')->middleware(['auth','auth.admin']);
    Route::get('/admin/department/{id}/edit', 'BackEndController@edit_department')->name('edit-department')->middleware(['auth','auth.admin']);
    Route::post('/admin/department/{id}/edit', 'BackEndController@editdepartment')->middleware(['auth','auth.admin']);
    Route::post('/admin/department/{id}', 'BackEndController@delete_department')->middleware(['auth','auth.admin']);
//

//Admin FAQs Routes
    Route::get('/admin/faqs', 'BackEndController@afaqs')->name('afaqs')->middleware(['auth','auth.admin']);
    Route::get('/admin/faqs/new', 'BackEndController@new_afaqs')->name('new-afaqs')->middleware(['auth','auth.admin']);
    Route::post('/admin/faqs/new', 'BackEndController@newafaqs')->name('new-afaqs')->middleware(['auth','auth.admin']);
    Route::get('/admin/faqs/{id}/edit', 'BackEndController@edit_afaqs')->name('edit-afaqs')->middleware(['auth','auth.admin']);
    Route::post('/admin/faqs/{id}/edit', 'BackEndController@editafaqs')->name('edit-afaqs')->middleware(['auth','auth.admin']);
    Route::post('/admin/faqs/{faq_id}', 'BackEndController@delete_afaqs')->middleware(['auth','auth.admin']);
//

//Admin Cat Routes
    Route::get('/admin/cat', 'BackEndController@cat')->name('cat')->middleware(['auth','auth.admin']);
    Route::get('/admin/new-cat', 'HomeController@new_cat')->name('new-cat')->middleware(['auth','auth.admin']);
    Route::post('/admin/new-cat', 'BackEndController@new_cat')->name('new-cat')->middleware(['auth','auth.admin']);
    Route::get('/admin/cat/{id}/edit', 'BackEndController@edit_cat')->name('edit-cat')->middleware(['auth','auth.admin']);
    Route::post('/admin/cat/{id}/edit', 'BackEndController@editcat')->name('edit-cat')->middleware(['auth','auth.admin']);
    Route::post('/admin/cat/{cat_id}', 'BackEndController@delete_cat')->middleware(['auth','auth.admin']);
//

Auth::routes();
Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/category/{slug}', 'FrontEndController@search_cat')->name('search_cat');
Route::get('/{slug}', 'FrontEndController@topic_single')->name('topic_single');
Route::post('/{slug}', 'BackEndController@reply_topic_single')->name('topic_single');

