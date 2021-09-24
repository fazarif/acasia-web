<?php

use App\Mail\ContactMail;

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

Auth::routes();

//	PUBLIC ROUTES FOR WEBSITE

Route::get('/', 'PageController@index')->name('index');
Route::get('/index', 'PageController@index')->name('index-page');
Route::get('/about-us', function () {	return view('about_us');	})->name('about_us');
Route::get('/solutions','NewsController@productView')->name('product_services');
Route::get('/news-update','NewsController@newsView')->name('news_update');
Route::get('/experience', function () {	return view('experience');	})->name('experience');
Route::get('/experience/digital', function () {	return view('experience_digital');	})->name('experience-digital');
Route::get('/experience/connectivity', function () {	return view('experience_connectivity');	})->name('experience-connectivity');
Route::get('/career', 'PageController@careerListing')->name('opportunity');
Route::get('/career/detail/{id}','PageController@jobDetail')->name('opportunity-detail');
Route::get('/contactus', function () {	return view('contact');	})->name('contact');
Route::post('/contactus/create', 'ContactController@sendEmail')->name('create-contact');
Route::get('/webinar/register', 'PageController@webinar')->name('webinar-register');
Route::post('/webinar/create', 'ContactController@sendRegister')->name('create-webinar-register');

Route::get('/test', 'ContactController@test')->name('test');
Route::get('/cms/test', 'ContactController@cmsTest')->name('cms-test');
Route::get('/cms/ratingindex', 'ContactController@ratingindexview')->name('rating-index');

Route::get('/cert', 'ContactController@certView')->name('cert-view');
Route::get('/cert-download/{id}', 'ContactController@createPdf')->name('cert-download');
Route::get('/email-delayed', 'ContactController@delayView')->name('email-delay');
Route::get('/email-delayed/send', 'ContactController@delaySend')->name('email-delay-send');

// EMAILING ROUTES

Route::get('/email/webinar-register','ContactController@viewWebinarRegister')->name('email-webinar');
Route::get('/email/series2','ContactController@viewEmailSeries2')->name('email-series2');
Route::get('/email/series2/send','ContactController@sendPromo')->name('email-series2-send');
Route::get('/email/webinar-reminder','ContactController@viewWebinarReminder')->name('email-webinar-reminder');
Route::get('/email/webinar-reminder/send','ContactController@sendWebinarReminder')->name('send-webinar-reminder');
Route::get('/email/webinar-promo','ContactController@viewWebinarVoucher')->name('webinar-early');
Route::get('/email/webinar-promo/send','ContactController@sendWebinarVoucher')->name('send-webinar-reminder');
Route::get('/email/webinar-thankyou/send','ContactController@sendWebinarThankYou')->name('send-webinar-thankyou');

// Route::post('/contactus', 'ContactController@sendEmail')->name('contact-email');

// CMS MENU ROUTES

Route::get('/cms', 'NewsController@cmsView')->name('login_page');
Route::get('/cms/index', 'HomeController@indexPage')->name('cms-index');
Route::get('/cms/product','HomeController@productPage')->name('cms-product');
Route::get('/cms/news','HomeController@newsPage')->name('cms-news');
Route::get('/cms/gallery','HomeController@galleryPage')->name('cms-gallery');
Route::get('/cms/video','HomeController@videoPage')->name('cms-video');

// CMS MENU ACTIONS

Route::post('/cms/upload/slider', 'CmsController@uploadIndexSlider')->name('upload-indexslider');
Route::post('/cms/upload/video', 'CmsController@uploadIndexVideo')->name('upload-indexvideo');
Route::post('/cms/upload/news', 'CmsController@uploadNews')->name('upload-news');
Route::post('/cms/upload/gallery', 'CmsController@uploadGallery')->name('upload-gallery');

// JSON ROUTES

Route::get('/json/index','ContentController@jsonIndex');
Route::post('/json/index/update','ContentController@jsonIndexUpdate');
Route::post('/json/index/delete','ContentController@jsonIndexDelete');
Route::get('/json/news','ContentController@jsonNews');
Route::get('/json/gallery','ContentController@jsonGallery');
Route::get('/get/gallery','ContentController@displayGallery');