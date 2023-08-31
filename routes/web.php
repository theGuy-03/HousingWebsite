<?php


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SettingController;
use App\Http\Controllers\userProfile\PropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\FooterController;

use App\Http\Livewire\Product\ProductComponent;
use App\Http\Livewire\Product\AddProductComponent;
use App\Http\Livewire\Product\EditProductComponent;

Route::get('/', function () {
    //return view('frontend.index');
    return view('frontend.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(RegisteredUserController::class)->group(function () {
   Route::post('add/user', 'store')->middleware(['auth', 'verified'])->name('add.user');
});
// All home Routes
Route::controller(HomeController::class)->group(function () {
     Route::get('/profile', 'index')->middleware(['auth', 'verified'])->name('profile');
     Route::get('/home','home')->middleware(['auth', 'verified'])->name('index.home');
     Route::get('/all/users','allUser')->name('all.users');
     Route::get('/single/post/details/{id}','singlePost')->name('single.post');
     Route::get('/user/view/profile/{id}','userview')->name('user.view');
     Route::get('/sale','indexSale')->name('index.sale');
     Route::get('/rent','indexRent')->name('index.rent');
     Route::get('/mortgage','indexmortgage')->name('index.mortgage');
     Route::get('/view/profile/{id}','userview')->name('userview.index');
     Route::get('/view/sale/profile/{id}','userViewSale')->name('userview.rent');
     Route::get('/view/rent/profile/{id}','userViewRent')->name('userview.sale');
     Route::get('/view/mortgage/profile/{id}','userViewMortgage')->name('userview.mortgage');

});
//about pages route
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'showAbout')->name('index.about');
    Route::get('/contact', 'showContact')->name('index.contact');
    Route::get('/all/about','allabout')->name('all.about');
    Route::get('/add/about','addabout')->name('add.about');
    Route::put('/add/about/data/{id}', 'storeAbout')->name('store.about');
    Route::Post('/contact/us','contactUs')->name('contact.us');
    Route::get('/user/view/about/{id}', 'userviewAbout')->name('userview.about');



});
// All dashboard routes
Route::controller(AdminController::class)->group(function () {
    Route::get('admin/login', 'destroy')->name('admin.logout');
    Route::get('admin/profile', 'profile')->name('admin.profile');
    Route::get('edit/profile', 'editProfile')->name('edit.profile');

    Route::put('store/profile/{id}','storeProfile')->name('store.profile');
    Route::get('change/password', 'changePassword')->name('change.password');
    Route::post('update/password','updatePassword')->name('update.password');

    Route::get('/all/user','alluser')->name('all.user');
    Route::get('/add/user', 'addNewUser')->name('addnew.user');
    Route::post('/sotre/new/user', 'storeNewUser')->name('storeNew.user');
    Route::get('/change/authority/{id}', 'changeAuthority')->name('change.authority');
    // Route::post('/store/user','storeUser')->name('storenew.user');

    Route::get('/all/property', 'allProperty')->name('all.property');
    Route::get('/all/sale/property', 'allSale')->name('all.sales');
    Route::get('/all/Rent/property', 'allRent')->name('all.rent');
    Route::get('/all/Mortgage/property', 'allMortgage')->name('all.mortgage');
    Route::get('/delete/user/accoutn/{id}', 'deleteuserAccout')->name('deleteuser.Accout');

    Route::put('/update/user/{id}', 'updateUser')->name('update.userAuthority');
    Route::get('/delete/post/{id}', 'deletePost')->name('delete.post');
});
//profile All routes
Route::controller(ProfileController::class)->group(function () {
    Route::get('/userProfile', 'profile')->middleware(['auth', 'verified'])->name('user.profile');
    Route::get('/user-setting', 'setting')->name('user.setting');
    Route::get('user-about', 'about')->name('user.about');
    Route::get('user-contact', 'contact')->name('user.contact');
    // posts routes
    Route::get('/sales-post','salePost')->name('sale.post');
    Route::get('/rent-post','rentPost')->name('rent.post');
    Route::get('/mortgage-post','mortgagePost')->name('mortgage.post');
});
// Propety All routes
Route::controller(PropertyController::class)->group(function (){
        Route::get('/add-Property', 'addProperty')->name('add.property');
        Route::post('/save-property', 'storeData')->name('save.property');
        Route::get('/property/list','propertyList')->name('propeties.list');
        Route::get('/edit/post/{id}','editPost')->name('edit.post');
        Route::put('/update/post/{id}','updatPost')->name('update.post');
        Route::get('/delete/post/{id}','deletePost')->name('delete.post');

});
// User Setting All routes
Route::controller(SettingController::class)->group(function (){
    Route::get('/change/user/password', 'edit')->name('editUser.profile');
    Route::post('/update/user/password', 'updateUserPassword')->name('update.userPassword');
    Route::get('/edit/profile/accout','editprofileaccout')->name('edit.useraccout');
    Route::put('/updat/user/profile/{id}', 'updateUserProfile')->name('store.useraccount');
    Route::get('/delete/accout/{id}', 'destroyAccoutn')->name('distroy.userAccout');
});
//serch routes
Route::controller(SearchController::class)->group(function () {
    Route::get('/search', 'searchData')->name('search');

});
//Approve Property Routes
Route::controller(ApproveController::class)->group(function () {
    Route::get('property/post', 'propertyPost')->name('property.post');
    Route::get('property/details/{id}','propertyDetails')->name('post.details');
    Route::get('approve/post/{id}', 'approvePost')->name('approve.post');
});

Route::controller(FooterController::class)->group(function () {
    Route::get('/footer/' , 'footer')->name('footer.data');
    Route::get('/add/footer', 'addfooter')->name('add.footer');
    Route::put('/footer/store/{id}', 'storeFooter')->name('store.footer');
});
require __DIR__.'/auth.php';
