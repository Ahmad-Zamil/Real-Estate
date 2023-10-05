<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\OurStoryImageController;
use App\Http\Controllers\Backend\OurStoryController;
use App\Http\Controllers\Backend\BODImageController;
use App\Http\Controllers\Backend\WOBController;
use App\Http\Controllers\Backend\BODController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\LandingCompanyController;
use App\Http\Controllers\Backend\ManagementTeamController;
use App\Http\Controllers\Backend\MissionVisionValuesController;
use App\Http\Controllers\Backend\CSRController;
use App\Http\Controllers\Backend\CSRGalleryController;



Route::get('/', function () {
    return view('welcome');
});


/* #################### 3d homes [Frontend] #################### */

// Services
Route::get('/our_story', [Controller::class, 'our_story'])->name('our_story');
Route::get('/vision_mission', [Controller::class, 'vision_mission'])->name('vision_mission');
Route::get('/board_of_directors', [Controller::class, 'board_of_directors'])->name('board_of_directors');
Route::get('/management_team', [Controller::class, 'management_team'])->name('management_team');
Route::get('/companies', [Controller::class, 'companies'])->name('companies');
Route::get('/our_clients', [Controller::class, 'our_clients'])->name('our_clients');
Route::get('/csr', [Controller::class, 'csr'])->name('csr');
Route::get('/bod', [Controller::class, 'bod'])->name('bod');

// Projects
Route::get('/ongoing', [Controller::class, 'ongoing'])->name('ongoing');
Route::get('/upcoming', [Controller::class, 'upcoming'])->name('upcoming');
Route::get('/completed', [Controller::class, 'completed'])->name('completed');
Route::get('/project/details/{id}', [Controller::class, 'project_details'])->name('project_details');

// News
Route::get('/news', [Controller::class, 'news'])->name('news');
Route::get('/news_details/{post_slug}', [Controller::class, 'news_details'])->name('news_details');

// Career
Route::get('/career', [Controller::class, 'career'])->name('career');

// Contact
Route::get('/buyers', [Controller::class, 'buyers'])->name('buyers');
Route::get('/contact_us', [Controller::class, 'contact_us'])->name('contact_us');
Route::get('/customers', [Controller::class, 'customers'])->name('customers');
Route::get('/landowners', [Controller::class, 'landowners'])->name('landowners');

/* #################### End 3d homes [Frontend] #################### */


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';


/* #################### Admin Panel [Backend] #################### */

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashobard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');

    // Slider All Route
    Route::controller(SliderController::class)->group(function () {
        Route::get('/all/slider', 'AllSlider')->name('all.slider');
        Route::get('/add/slider', 'AddSlider')->name('add.slider');
        Route::post('/store/slider', 'StoreSlider')->name('store.slider');
        Route::get('/edit/slider/{id}', 'EditSlider')->name('edit.slider');
        Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
        Route::get('/delete/slider/{id}', 'DeleteSlider')->name('delete.slider');
    });

    //Our Story [Image] Route
    Route::controller(OurStoryImageController::class)->group(function () {
        Route::get('/all/ourStoryImage', 'AllOurStoryImage')->name('all.ourStoryImage');
        Route::get('/add/ourStoryImage', 'AddOurStoryImage')->name('add.ourStoryImage');
        Route::post('/store/ourStoryImage', 'StoreOurStoryImage')->name('store.ourStoryImage');
        Route::get('/edit/ourStoryImage/{id}', 'EditOurStoryImage')->name('edit.ourStoryImage');
        Route::post('/update/ourStoryImage', 'UpdateOurStoryImage')->name('update.ourStoryImage');
        Route::get('/delete/ourStoryImage/{id}', 'DeleteOurStoryImage')->name('delete.ourStoryImage');
    });

    //Our Story Route
    Route::controller(OurStoryController::class)->group(function () {
        Route::get('/all/ourStory', 'AllOurStory')->name('all.ourStory');
        Route::get('/add/ourStory', 'AddOurStory')->name('add.ourStory');
        Route::post('/store/ourStory', 'StoreOurStory')->name('store.ourStory');
        Route::get('/edit/ourStory/{id}', 'EditOurStory')->name('edit.ourStory');
        Route::post('/update/ourStory', 'UpdateOurStory')->name('update.ourStory');
        Route::get('/delete/ourStory/{id}', 'DeleteOurStory')->name('delete.ourStory');
    });

    //Board of Directors [Image] Route
    Route::controller(BODImageController::class)->group(function () {
        Route::get('/all/BODImage', 'AllBODImage')->name('all.BODImage');
        Route::get('/add/BODImage', 'AddBODImage')->name('add.BODImage');
        Route::post('/store/BODImage', 'StoreBODImage')->name('store.BODImage');
        Route::get('/edit/BODImage/{id}', 'EditBODImage')->name('edit.BODImage');
        Route::post('/update/BODImage', 'UpdateBODImage')->name('update.BODImage');
        Route::get('/delete/BODImage/{id}', 'DeleteBODImage')->name('delete.BODImage');
    });

    //Board of Directors Route
    Route::controller(BODController::class)->group(function () {
        Route::get('/all/BOD', 'AllBOD')->name('all.BOD');
        Route::get('/add/BOD', 'AddBOD')->name('add.BOD');
        Route::post('/store/BOD', 'StoreBOD')->name('store.BOD');
        Route::get('/edit/BOD/{id}', 'EditBOD')->name('edit.BOD');
        Route::post('/update/BOD', 'UpdateBOD')->name('update.BOD');
        Route::get('/delete/BOD/{id}', 'DeleteBOD')->name('delete.BOD');
    });


    //Management Teams Route
    Route::controller(ManagementTeamController::class)->group(function () {
        Route::get('/all/managementTeam', 'AllManagementTeam')->name('all.managementTeam');
        Route::get('/add/managementTeam', 'AddManagementTeam')->name('add.managementTeam');
        Route::post('/store/managementTeam', 'StoreManagementTeam')->name('store.managementTeam');
        Route::get('/edit/managementTeam/{id}', 'EditManagementTeam')->name('edit.managementTeam');
        Route::post('/update/managementTeam', 'UpdateManagementTeam')->name('update.managementTeam');
        Route::get('/delete/managementTeam/{id}', 'DeleteManagementTeam')->name('delete.managementTeam');
    });


    //Mission Vision Values Route
    Route::controller(MissionVisionValuesController::class)->group(function () {
        Route::get('/all/missionVisionValues', 'AllMissionVisionValues')->name('all.missionVisionValues');
        Route::get('/add/missionVisionValues', 'AddMissionVisionValues')->name('add.missionVisionValues');
        Route::post('/store/missionVisionValues', 'StoreMissionVisionValues')->name('store.missionVisionValues');
        Route::get('/edit/missionVisionValues/{id}', 'EditMissionVisionValues')->name('edit.missionVisionValues');
        Route::post('/update/missionVisionValues', 'UpdateMissionVisionValues')->name('update.missionVisionValues');
        Route::get('/delete/missionVisionValues/{id}', 'DeleteMissionVisionValues')->name('delete.missionVisionValues');
    });


    //CSR Route
    Route::controller(CSRController::class)->group(function () {
        Route::get('/all/CSR', 'AllCSR')->name('all.CSR');
        Route::get('/add/CSR', 'AddCSR')->name('add.CSR');
        Route::post('/store/CSR', 'StoreCSR')->name('store.CSR');
        Route::get('/edit/CSR/{id}', 'EditCSR')->name('edit.CSR');
        Route::post('/update/CSR', 'UpdateCSR')->name('update.CSR');
        Route::get('/delete/CSR/{id}', 'DeleteCSR')->name('delete.CSR');
    });


    //CSR Gallery Route
    Route::controller(CSRGalleryController::class)->group(function () {
        Route::get('/all/CSRGallery', 'AllCSRGallery')->name('all.CSRGallery');
        Route::get('/add/CSRGallery', 'AddCSRGallery')->name('add.CSRGallery');
        Route::post('/store/CSRGallery', 'StoreCSRGallery')->name('store.CSRGallery');
        Route::get('/edit/CSRGallery/{id}', 'EditCSRGallery')->name('edit.CSRGallery');
        Route::post('/update/CSRGallery', 'UpdateCSRGallery')->name('update.CSRGallery');
        Route::get('/delete/CSRGallery/{id}', 'DeleteCSRGallery')->name('delete.CSRGallery');
    });

    //Career Route
    Route::controller(WOBController::class)->group(function () {
        Route::get('/all/career', 'AllCareer')->name('all.career');
        Route::get('/add/career', 'AddCareer')->name('add.career');
        Route::post('/store/career', 'StoreCareer')->name('store.career');
        Route::get('/edit/career/{id}', 'EditCareer')->name('edit.career');
        Route::post('/update/career', 'UpdateCareer')->name('update.career');
        Route::get('/delete/career/{id}', 'DeleteCareer')->name('delete.career');
    });

    // Brand All Route
    Route::controller(BrandController::class)->group(function () {
        Route::get('/all/brand', 'AllBrand')->name('all.brand');
        Route::get('/add/brand', 'AddBrand')->name('add.brand');
        Route::post('/store/brand', 'StoreBrand')->name('store.brand');
        Route::get('/edit/brand/{id}', 'EditBrand')->name('edit.brand');
        Route::post('/update/brand', 'UpdateBrand')->name('update.brand');
        Route::get('/delete/brand/{id}', 'DeleteBrand')->name('delete.brand');
    });

    // Companies All Route [Landing Page]
    Route::controller(LandingCompanyController::class)->group(function () {
        Route::get('/all/landing/company', 'AllCompany')->name('all.landing.company');
        Route::get('/add/landing/company', 'AddCompany')->name('add.landing.company');
        Route::post('/store/landing/company', 'StoreCompany')->name('store.landing.company');
        Route::get('/edit/landing/company/{id}', 'EditCompany')->name('edit.landing.company');
        Route::post('/update/landing/company', 'UpdateCompany')->name('update.landing.company');
        Route::get('/delete/landing/company/{id}', 'DeleteCompany')->name('delete.landing.company');
    });

    // Category All Route
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

    // SubCategory All Route
    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/all/subcategory', 'AllSubCategory')->name('all.subcategory');
        Route::get('/add/subcategory', 'AddSubCategory')->name('add.subcategory');
        Route::post('/store/subcategory', 'StoreSubCategory')->name('store.subcategory');
        Route::get('/edit/subcategory/{id}', 'EditSubCategory')->name('edit.subcategory');
        Route::post('/update/subcategory', 'UpdateSubCategory')->name('update.subcategory');
        Route::get('/delete/subcategory/{id}', 'DeleteSubCategory')->name('delete.subcategory');
        Route::get('/subcategory/ajax/{category_id}', 'GetSubCategory');
    });

    // Product All Route
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UpdateProduct')->name('update.product');
        Route::post('/update/product/thambnail', 'UpdateProductThambnail')->name('update.product.thambnail');
        Route::post('/update/product/glanceImage', 'UpdateGlanceImage')->name('update.glanceImage.thambnail');
        Route::post('/update/product/FeatureImage', 'UpdateFeatureImage')->name('update.FeatureImage.thambnail');
        Route::post('/update/product/multiimage', 'UpdateProductMultiimage')->name('update.product.multiimage');
        Route::get('/product/multiimg/delete/{id}', 'MulitImageDelelte')->name('product.multiimg.delete');
        Route::get('/product/inactive/{id}', 'ProductInactive')->name('product.inactive');
        Route::get('/product/active/{id}', 'ProductActive')->name('product.active');
        Route::get('/delete/product/{id}', 'ProductDelete')->name('delete.product');

        // For Product Stock
        Route::get('/product/stock', 'ProductStock')->name('product.stock');
    });

    // Blog Category All Route
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog/category', 'AllBlogCateogry')->name('admin.blog.category');
        Route::get('/admin/add/blog/category', 'AddBlogCateogry')->name('add.blog.categroy');
        Route::post('/admin/store/blog/category', 'StoreBlogCateogry')->name('store.blog.category');
        Route::get('/admin/edit/blog/category/{id}', 'EditBlogCateogry')->name('edit.blog.category');
        Route::post('/admin/update/blog/category', 'UpdateBlogCateogry')->name('update.blog.category');
        Route::get('/admin/delete/blog/category/{id}', 'DeleteBlogCateogry')->name('delete.blog.category');
    });

    // Blog Post All Route
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog/post', 'AllBlogPost')->name('admin.blog.post');
        Route::get('/admin/add/blog/post', 'AddBlogPost')->name('add.blog.post');
        Route::post('/admin/store/blog/post', 'StoreBlogPost')->name('store.blog.post');
        Route::get('/admin/edit/blog/post/{id}', 'EditBlogPost')->name('edit.blog.post');
        Route::post('/admin/update/blog/post', 'UpdateBlogPost')->name('update.blog.post');
        Route::get('/admin/delete/blog/post/{id}', 'DeleteBlogPost')->name('delete.blog.post');
    });

    // Site Setting All Route
    Route::controller(SiteSettingController::class)->group(function () {
        Route::get('/site/setting', 'SiteSetting')->name('site.setting');
        Route::post('/site/setting/update', 'SiteSettingUpdate')->name('site.setting.update');
        Route::get('/seo/setting', 'SeoSetting')->name('seo.setting');
        Route::post('/seo/setting/update', 'SeoSettingUpdate')->name('seo.setting.update');
    });

    // Admin User All Route
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::post('/admin/user/store', 'AdminUserStore')->name('admin.user.store');
        Route::get('/edit/admin/role/{id}', 'EditAdminRole')->name('edit.admin.role');
        Route::post('/admin/user/update/{id}', 'AdminUserUpdate')->name('admin.user.update');
        Route::get('/delete/admin/role/{id}', 'DeleteAdminRole')->name('delete.admin.role');
    });
});

/* #################### Admin Panel [Backend] #################### */


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);
