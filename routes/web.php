<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SubCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AdminProfileController;

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

Route::middleware('admin:admin')->group(function(){
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function(){

    //for admin
    Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.index');
        })->name('dashboard');
    });

    //Admin all route

    Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    Route::controller(AdminProfileController::class)->group(function () {
        Route::get('admin/profile', 'adminProfile')->name('admin.profile');
        Route::get('admin/profile/edit', 'adminProfileEdit')->name('admin.profile.edit');
        Route::post('admin/profile/store', 'adminProfileStore')->name('admin.profile.store');
        Route::get('admin/change/password',  'adminChangePassword')->name('admin.change.password');
        Route::post('admin/update/password',  'adminUpdatePassword')->name('admin.password.update');
    });

});


//for user
Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('dashboard', compact('user'));
    })->name('dashboard');
});




//Front end Route
Route::get('/', [IndexController::class, 'index']);
Route::get('/user/logout', [IndexController::class, 'userLogout'])->name('user.logout');
Route::get('/user/profile', [IndexController::class, 'userProfile'])->name('user.profile');
Route::post('/user/profile/store', [IndexController::class, 'userProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [IndexController::class, 'userChangePassword'])->name('user.change.password');
Route::post('/user/update/password', [IndexController::class, 'userUpdatePassword'])->name('user.password.update');

//All  Brand Route on Admin side
Route::prefix('brand')->group(function(){
    Route::get('/view', [BrandController::class, 'brandView'])->name('all.brand');
    Route::post('/store', [BrandController::class, 'brandStore'])->name('brand.store');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/destroy/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
});

//All  Category Route on Admin side
Route::prefix('category')->group(function(){
    Route::get('/view', [CategoryController::class, 'categoryView'])->name('all.category');
    Route::post('/store', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

//All  Sub Category Route on Admin side
Route::prefix('subcategory')->group(function(){
    Route::get('/view', [SubCategory::class, 'subCategoryView'])->name('all.subcategory');
    Route::post('/store', [SubCategory::class, 'subcategoryStore'])->name('subcategory.store');
    Route::get('/edit/{id}', [SubCategory::class, 'edit'])->name('subcategory.edit');
    Route::post('/update', [SubCategory::class, 'update'])->name('subcategory.update');
    Route::get('/destroy/{id}', [SubCategory::class, 'destroy'])->name('subcategory.destroy');
});

//All  Sub Sub Category Route on Admin side
Route::prefix('subsubcategory')->group(function(){
    Route::get('/view', [SubCategory::class, 'subSubCategoryView'])->name('all.subsubcategory');
    Route::post('/store', [SubCategory::class, 'subSubcategoryStore'])->name('subsubcategory.store');
    Route::get('/edit/{id}', [SubCategory::class, 'subsubcategoryedit'])->name('subsubcategory.edit');
    Route::post('/update', [SubCategory::class, 'subSubCategoryUpdate'])->name('subsubcategory.update');
    Route::get('/destroy/{id}', [SubCategory::class, 'subSubCategorydestroy'])->name('subsubcategory.destroy');
});


//subcategory & sub sub category getting
Route::get('/category/subcategory/ajax/{category_id}', [SubCategory::class, 'getSubCategory']);
Route::get('/category/sub-subcategory/ajax/{subcategory_id}', [SubCategory::class, 'getSubSubCategory']);


//Product Route on Admin side
Route::prefix('product')->group(function(){
    Route::controller(ProductController::class)->group(function () {
        Route::get('/add',  'addProduct')->name('add.product');
        Route::post('/store',  'storeProduct')->name('store.product');
        Route::get('/manage-product',  'manageProduct')->name('manage.product');
        Route::get('edit-product/{id}',  'editProduct')->name('edit.product');
        Route::post('update-product',  'updateProduct')->name('update.product');
        Route::post('image/update',  'updateProductMultiImg')->name('update.product.image');
        Route::post('image/update/thumbnail',  'updateProductThumbImg')->name('update.product.thumb.image');
        Route::get('product/multiimg/delete/{id}',  'productMultiImgDelete')->name('product.multiimg.delete');

        Route::get('/inactive/{id}', 'ProductInactive')->name('product.inactive');
        Route::get('/active/{id}', 'ProductActive')->name('product.active');
        Route::get('/delete/{id}',  'ProductDelete')->name('product.delete');
   });
   
});

//Product Route on Admin side
Route::prefix('slider')->group(function(){
    Route::controller(SliderController::class)->group(function () {
        Route::get('/view',  'viewSlider')->name('view.slider');
        Route::post('/store',  'storeSlider')->name('store.slider');
        Route::get('/edit/{id}',  'editSlider')->name('edit.slider');
        Route::post('update-slider',  'updateSlider')->name('update.slider');
        Route::get('/delete/{id}',  'sliderDelete')->name('slider.delete');

       Route::get('/inactive/{id}', 'SliderInactive')->name('slider.inactive');
       Route::get('/active/{id}',  'SliderActive')->name('slider.active');

   });
   
});

//// Frontend All Routes /////
/// Multi Language All Routes ////

Route::get('/language/hindi', [LanguageController::class, 'Hindi'])->name('hindi.language');
Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');

// Frontend Product Details Page url 
Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);

// Frontend Product Tags Page 
Route::get('/product/tag/{tag}', [IndexController::class, 'TagWiseProduct']);

// Frontend SubCategory wise Data
Route::get('/subcategory/product/{subcat_id}/{slug}', [IndexController::class, 'SubCatWiseProduct']);

// Frontend Sub-SubCategory wise Data
Route::get('/subsubcategory/product/{subsubcat_id}/{slug}', [IndexController::class, 'SubSubCatWiseProduct']);

// Product View Modal with Ajax
Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductViewAjax']);





