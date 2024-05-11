<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BotmanController;

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


Route::get('/test', function () {
            return view('frontend.home');
});


// Mail Controller
        Route::post('/send',[MailController::class,'store'])->name('send.mail');
// AdminController
        Route::post('/web/store',[AdminController::class,'store'])->name('web.store');
// FrontendControllers
        route::get('/',[frontendController::class,'index'])->name('web.home');

        route::get('/web/about',[frontendController::class,'about'])->name('web.about');

        route::get('/web/blog',[frontendController::class,'blog'])->name('web.blog');

        route::get('/web/contact',[frontendController::class,'contact'])->name('web.contact');

        route::get('/web/faq',[frontendController::class,'faq'])->name('web.abofaqut');

        route::get('/web/project',[frontendController::class,'project'])->name('web.project');

        route::get('/web/service',[frontendController::class,'service'])->name('web.service');

        route::get('/web/seo',[frontendController::class,'seo'])->name('web.seo');

        route::get('/web/ecommerce',[frontendController::class,'ecommerce'])->name('web.ecommerce');

        route::get('/web/create',[frontendController::class,'create'])->name('web.create');

        route::get('/web/service-Detail',[frontendController::class,'webDevelopmet'])->name('web.webDevelopmet');

        route::get('/web/graphic-designing',[frontendController::class,'graphicDesigning'])->name('web.graphicDesigning');

        route::get('/web/seo-Detail',[frontendController::class,'seoDetail'])->name('web.seoDetail');

        route::get('/web/digital-Marketing',[frontendController::class,'digitalMarketing'])->name('web.digitalMarketing');

        route::get('/web/services',[frontendController::class,'services'])->name('web.services');

        route::get('/web/ecommerce-Blog',[frontendController::class,'ecommerceBlog'])->name('web.ecommerceBlog');

        route::get('/web/web-Project',[frontendController::class,'webProject'])->name('web.webProject');

        route::get('/web/web-Design',[frontendController::class,'webDesign'])->name('web.webDesign');

        route::get('/web/web-service',[frontendController::class,'showmore'])->name('web.showmore');

        route::get('/web/web-development',[frontendController::class,'development'])->name('web.development');

        route::get('/web/graphic_design_blog',[frontendController::class,'graphicDesignBlog'])->name('web.graphicDesignBlog');

        route::get('/web/digital-Social-Media-Blog',[frontendController::class,'digitalSocialMediaBlog'])->name('web.digitalSocialMediaBlog');

        route::get('/web/Ecommerce-Blog',[frontendController::class,'EcommerceBlogs'])->name('web.EcommerceBlogs');

        route::get('/web/Seo-Content-Writing-Blog',[frontendController::class,'SeoContentWritingBlog'])->name('web.SeoContentWritingBlog');

        route::get('/web/conten-tWriting',[frontendController::class,'contentWriting'])->name('web.contentWriting');

        route::get('/web/Social-Media-Marketing',[frontendController::class,'SocialMediaMarketing'])->name('web.SocialMediaMarketing');

        route::get('/web/Graphic-Design',[frontendController::class,'GraphicDesign'])->name('web.GraphicDesign');

        route::get('/web/Content-Writings',[frontendController::class,'ContentWritings'])->name('web.ContentWritings');

        route::get('/web/Graphic-Design',[frontendController::class,'GraphicsDesign'])->name('web.GraphicsDesign');

        route::get('/web/Web-Projects',[frontendController::class,'WebProjects'])->name('web.WebProjects');

        route::get('/web/Web-Designs',[frontendController::class,'WebDesigns'])->name('web.WebDesigns');

        route::get('/web/web-Design-Project',[frontendController::class,'webDesignProject'])->name('web.webDesignProject');

        route::get('/web/brand-Awareness',[frontendController::class,'brandAwareness'])->name('web.brandAwareness');

        route::get('/web/App-Development-Blog',[frontendController::class,'AppDevelopmentBlog'])->name('web.AppDevelopmentBlog');

        Route::match(['get', 'post'], '/botman', 'BotManController@handle');
