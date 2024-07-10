<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SubCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WishlistController;
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
Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/user/logout', 'userLogout')->name('user.logout');
    Route::get('/user/profile', 'userProfile')->name('user.profile');
    Route::post('/user/profile/store', 'userProfileStore')->name('user.profile.store');
    Route::get('/user/change/password', 'userChangePassword')->name('user.change.password');
    Route::post('/user/update/password', 'userUpdatePassword')->name('user.password.update');
});


//All  Brand Route on Admin side
Route::prefix('brand')->group(function(){
    Route::controller(BrandController::class)->group(function () {
        Route::get('/view', 'brandView')->name('all.brand');
        Route::post('/store', 'brandStore')->name('brand.store');
        Route::get('/edit/{id}', 'edit')->name('brand.edit');
        Route::post('/update', 'update')->name('brand.update');
        Route::get('/destroy/{id}', 'destroy')->name('brand.destroy');
    });
  
});

//All  Category Route on Admin side
Route::prefix('category')->group(function(){
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/view', 'categoryView')->name('all.category');
        Route::post('/store', 'categoryStore')->name('category.store');
        Route::get('/edit/{id}', 'edit')->name('category.edit');
        Route::post('/update/{id}', 'update')->name('category.update');
        Route::get('/destroy/{id}', 'destroy')->name('category.destroy');
    });
   
});

//All  Sub Category Route on Admin side
Route::prefix('subcategory')->group(function(){
    Route::controller(SubCategory::class)->group(function () {
        Route::get('/view', 'subCategoryView')->name('all.subcategory');
        Route::post('/store', 'subcategoryStore')->name('subcategory.store');
        Route::get('/edit/{id}',  'edit')->name('subcategory.edit');
        Route::post('/update', 'update')->name('subcategory.update');
        Route::get('/destroy/{id}', 'destroy')->name('subcategory.destroy');
    });
 
});

//All  Sub Sub Category Route on Admin side
Route::prefix('subsubcategory')->group(function(){

    Route::controller(SubCategory::class)->group(function () {
        Route::get('/view', 'subSubCategoryView')->name('all.subsubcategory');
        Route::post('/store', 'subSubcategoryStore')->name('subsubcategory.store');
        Route::get('/edit/{id}', 'subsubcategoryedit')->name('subsubcategory.edit');
        Route::post('/update', 'subSubCategoryUpdate')->name('subsubcategory.update');
        Route::get('/destroy/{id}', 'subSubCategorydestroy')->name('subsubcategory.destroy');
    });
  
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


Route::controller(IndexController::class)->group(function () {
    Route::get('/product/details/{id}/{slug}', 'ProductDetails');
    Route::get('/product/tag/{tag}', 'TagWiseProduct');
    Route::get('/subcategory/product/{subcat_id}/{slug}', 'SubCatWiseProduct');
    Route::get('/subsubcategory/product/{subsubcat_id}/{slug}', 'SubSubCatWiseProduct');
    Route::get('/product/view/modal/{id}', 'ProductViewAjax');
});

//Cart Routes
Route::controller(CartController::class)->group(function () {
    Route::post('/cart/data/store/{id}',  'AddToCart');
    Route::get('/product/mini/cart/',  'AddMiniCart');
    Route::get('/minicart/product-remove/{rowId}',  'RemoveMiniCart');
    Route::post('/add-to-wishlist/{product_id}',  'AddToWishlist');
});

// Wishlist page
Route::group(['prefix'=>'user','middleware' => ['user','auth']],function(){

    Route::controller(WishlistController::class)->group(function () {
        Route::get('/wishlist',  'ViewWishlist')->name('wishlist');
        Route::get('/get-wishlist-product', 'GetWishlistProduct');
        Route::get('/wishlist-remove/{id}',  'RemoveWishlistProduct');
    });

    Route::get('/mycart', [CartPageController::class, 'MyCart'])->name('mycart');
    Route::get('/get-cart-product', [CartPageController::class, 'GetCartProduct']);
    Route::get('/cart-remove/{rowId}', [CartPageController::class, 'RemoveCartProduct']);
});

Route::get('/cart-increment/{rowId}', [CartPageController::class, 'CartIncrement']);
Route::get('/cart-decrement/{rowId}', [CartPageController::class, 'CartDecrement']);

