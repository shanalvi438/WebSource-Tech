<?php

namespace App\Http\Controllers;

use App\Models\frontend;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function faq(){
        return view('frontend.faq');
    }

    public function project(){
        return view('frontend.project');
    }

    public function service(){
        return view('frontend.service');
    }

    public function seo(){
        return view('frontend.seo');
    }

    public function ecommerce(){
        return view('frontend.ecommerce');
    }

    public function webDevelopmet(){
        return view('frontend.service-details');
    }

    public function graphicDesigning()
    {
        return view('frontend.graphic-designing');
    }

    public function seoDetail()
    {
        return view('frontend.seo');
    }

    public function digitalMarketing()
    {
        return view('frontend.digital-marketing');
    }

    public function services()
    {
        return view('frontend.service');
    }

    public function ecommerceBlog()
    {
        return view('frontend.e-commerce-blog');
    }

    public function webProject()
    {
        return view('frontend.web-project');
    }

    public function webDesign()
    {
        return view('frontend.web-design');
    }

    public function showmore()
    {
        return view('frontend.service');
    }

    public function development()
    {
        return view('frontend.web-development-blog');
    }

    public function graphicDesignBlog()
    {
        return view('frontend.graphic_design_blog');
    }

    public function digitalSocialMediaBlog()
    {
        return view('frontend.digital-social-media-blog');
    }

    public function EcommerceBlogs()
    {
        return view('frontend.e-commerce-blog');
    }

    public function SeoContentWritingBlog()
    {
        return view('frontend.seo-content-writing-blog');
    }

    public function contentWriting()
    {
        return view('frontend.content-writing');
    }

    public function DigitalMediaMarketing()
    {
        return view('frontend.digital-media-marketing');
    }

    public function SocialMediaMarketing()
    {
        return view('frontend.social-media-marketing');
    }

    public function GraphicDesign()
    {
        return view('frontend.graphic-design');
    }

    public function ContentWritings()
    {
        return view('frontend.content-writing');
    }

    public function GraphicsDesign()
    {
        return view('frontend.graphic-design');
    }

    public function WebProjects()
    {
        return view('frontend.web-project');
    }

    public function WebDesigns()
    {
        return view('frontend.web-design');
    }
    public function webDesignProject()
    {
        return view('frontend.web-design-project');
    }

    public function brandAwareness()
    {
        return view('frontend.brand-awareness');

    }

    public function AppDevelopmentBlog()
    {
        return view('frontend.app-development-blog');
    }
}
