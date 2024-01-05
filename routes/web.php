<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\HomeController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialiseController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;


/*
|--------------------------------------------------------------------------
| Front end Controllers start
|--------------------------------------------------------------------------
|
*/

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\CompanyController;
use App\Http\Controllers\frontend\ClassroomController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\OnlineclassController;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\TestimonialController;
use App\Http\Controllers\frontend\TrainingController;
use App\Http\Controllers\frontend\LoginpgController;
use App\Http\Controllers\frontend\search\SearchController;
use App\Http\Controllers\frontend\download\PdfController;

use App\Http\Controllers\frontend\corporate\MissionController;
use App\Http\Controllers\frontend\freetraining\FreecourseController;
use App\Http\Controllers\ProfileController;

/* role login authendication*/
use App\Http\Controllers\roleauth\RegisterController;
use App\Http\Controllers\roleauth\AuthloginController;
use App\Http\Controllers\roleauth\LogoutController;




/*
|--------------------------------------------------------------------------
| Front end Controllers end
|--------------------------------------------------------------------------
|
*/





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/welcome', [HomeController::class, 'welcome']);

/*about page*/
Route::get('/overview', [AboutController::class, 'about'])->name('about');
Route::get('/awards', [AboutController::class, 'awards'])->name('awards-recognition');
Route::get('/our-clients', [AboutController::class, 'clients'])->name('our-clients');
Route::get('/company-history', [AboutController::class, 'history'])->name('company-history');
Route::get('/faq', [AboutController::class, 'faq'])->name('faq');
Route::get('/leadership-team', [AboutController::class, 'team'])->name('leadership-team');
Route::get('/partners', [AboutController::class, 'partners'])->name('partners');
/* class room training */
Route::get('/class-room-training-course1',[ClassroomController::class, 'course_one'])->name('class-room-course1');
Route::get('/class-room-training-course2',[ClassroomController::class, 'course_two'])->name('class-room-course2');
Route::get('/class-room-training-course3',[ClassroomController::class, 'course_three'])->name('class-room-course3');
/*contact*/
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
/*online class room*/
Route::get('/onlineclass-course1', [OnlineclassController::class, 'onlineclass_one'])->name('onlineclass-course1');
Route::get('/onlineclass-course2', [OnlineclassController::class, 'onlineclass_two'])->name('onlineclass-course2');
Route::get('/onlineclass-course3', [OnlineclassController::class, 'onlineclass_three'])->name('onlineclass-course3');
Route::get('/onlineclass-course4', [OnlineclassController::class, 'onlineclass_four'])->name('onlineclass-course4');
Route::get('/onlineclass-course5', [OnlineclassController::class, 'onlineclass_five'])->name('onlineclass-course5');

/* pages*/
Route::get('/404', [PagesController::class, 'error'])->name('404');
Route::get('/search', [PagesController::class, 'search'])->name('search');

/*services*/
Route::get('/what-we-do', [ServicesController::class, 'wedo'])->name('what-we-do');
Route::get('/sales-effectiveness-solutions', [ServicesController::class, 'sales'])->name('sales-effectiveness-solutions');
Route::get('/sales-training', [ServicesController::class, 'salestraining'])->name('sales-training');
Route::get('/learning-approach', [ServicesController::class, 'learning'])->name('learning-approach');

/*shop*/
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/shop-details', [ShopController::class, 'shop_details'])->name('shop-details');

/*testimonial*/
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');

/* training*/
Route::get('/digital-marketing', [TrainingController::class, 'digital'])->name('digital-marketing');
Route::get('/training-program1', [TrainingController::class, 'training_program_one'])->name('training-program1');
Route::get('/training-program2', [TrainingController::class, 'training_program_two'])->name('training-program2');
Route::get('/training-program3', [TrainingController::class, 'training_program_three'])->name('training-program3');
Route::get('/training-program4', [TrainingController::class, 'training_program_four'])->name('training-program4');
Route::get('/training-program5', [TrainingController::class, 'training_program_five'])->name('training-program5');
Route::get('/training-program6', [TrainingController::class, 'training_program_six'])->name('training-program6');

//pdf dowload
Route::get('/download-pdf', [PdfController::class, 'download'])->name('download-pdf');

//corporate training
Route::get('/corporate/mission-billions', [MissionController::class, 'mission'])->name('corporate.mission-billions');
Route::get('/corporate/magic-males-female', [MissionController::class, 'malefemale'])->name('corporate.magic-males-female');
Route::get('/corporate/eagle-enterprize', [MissionController::class, 'enterprise'])->name('corporate.eagle-enterprize');
Route::get('/corporate/awaken-warrior', [MissionController::class, 'awaken'])->name('corporate.awaken-warrior');
Route::get('/corporate/artwork', [MissionController::class, 'artwork'])->name('corporate.artwork');

Route::get('/corporate/life-education', [MissionController::class, 'life'])->name('corporate.life-education');
Route::get('/corporate/college-to-corporate', [MissionController::class, 'college'])->name('corporate.college-to-corporate');
Route::get('/corporate/women-excellence', [MissionController::class, 'women'])->name('corporate.women-excellence');
Route::get('/corporate/superior-law', [MissionController::class, 'law'])->name('corporate.superior-law');
Route::get('/corporate/regulation-of-attraction', [MissionController::class, 'regulation'])->name('corporate.regulation-of-attraction');
Route::get('/corporate/adults', [MissionController::class, 'adult'])->name('corporate.adults');
Route::get('/corporate/nlp', [MissionController::class, 'nlp'])->name('corporate.nlp');
Route::get('/corporate/teach-instructor', [MissionController::class, 'teach'])->name('corporate.teach-instructor');
Route::get('/corporate/lifestyle', [MissionController::class, 'lifestyle'])->name('corporate.lifestyle');
Route::get('/corporate/college-program', [MissionController::class, 'cdp'])->name('corporate.college-program');
Route::get('/corporate/council', [MissionController::class, 'council'])->name('corporate.council');

//free course route
Route::get('/free-course', [FreecourseController::class, 'index'])->name('free-course');
Route::get('/data-science', [FreecourseController::class, 'datascience'])->name('data-science');





//login route

Route::get('/welcome-to-our-world',[LoginController::class,"login"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//socialite route
Route::get('login/google', [SocialiseController::class, 'redirectToGoogle'])->name('google-login');
Route::get('login/google/callback', [SocialiseController::class, 'handleGoogleCallback']);

Route::get('auth/google', [GoogleController::class, 'signInwithGoogle']);
Route::get('callback/google', [GoogleController::class, 'callbackToGoogle']);

//facebook login

//facebook login
Route::get('auth/facebook', [FacebookController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [FacebookController::class, 'loginWithFacebook']);

//profile picture view
Route::get('/profile-picture/{user}', 'ProfileController@showProfilePicture')->name('profile.picture');



/*rote authendication route */
Route::group(['namespace' => 'App\Http\Controllers\roleauth'], function()
{
    /**
     * Home Routes
     */


    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/role-register', 'RegisterController@show')->name('register.show');
        Route::post('/role-register', 'RegisterController@register')->name('register.perform');
        Route::post('/redirect', 'RegisterController@redirect')->name('register.redirect');


        /**
         * Login Routes
         */
        Route::get('/role-login', 'AuthloginController@show')->name('login.show');
        Route::post('/role-login', 'AuthloginController@login')->name('login.perform');



    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/role-logout', 'LogoutController@perform')->name('logout.perform');
    });
});

