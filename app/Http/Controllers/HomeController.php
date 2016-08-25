<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Requests;
use App\ProductModel;
use App\TheNew;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index controller
    public function index()
    {
        $products = Product::select('id','name','category_id')->get();
        $categories = Category::all();
        return view('index', ['products'=>$products,'categories'=>$categories]);
    }

    public function categories()
    {
        $products = Product::select('id','name','category_id')->get();
        $categories = Category::all();
        return view('products.categories', ['products'=>$products,'categories'=>$categories]);
    }

    public function category($id)
    {
        $products = Product::where('category_id',$id)->select('id','name','category_id','categorypic','categorypara')->get();;
        $categories = Category::all();
        $category_this = Category::find($id);
        return view('products.category', ['products'=>$products,'categories'=>$categories,'id'=>$id,'category_this'=>$category_this]);
    }

    public function product($id)
    {
        $categories = Category::all();
        $product_this = Product::find($id);
        $products = Product::where('category_id',$product_this['category_id'])->select('id','name')->get();
        $category_this = $categories->where('id',$product_this['category_id'])->first();
        return view('products.product', ['products'=>$products,'categories'=>$categories,'product_this'=>$product_this,'category_this'=>$category_this]);
    }
    
    public function models($id)
    {
        $categories = Category::all();
        $product_this = Product::find($id);
        $products = Product::where('category_id',$product_this['category_id'])->select('id','name')->get();
        $models_this = ProductModel::where('product_id',$id)->get();
        $category_this = $categories->where('id',$product_this['category_id'])->first();
        return view('products.models', ['products'=>$products,'categories'=>$categories,'product_this'=>$product_this,'category_this'=>$category_this,'models_this'=>$models_this]);
    }

    public function news_list()
    {
        $news = TheNew::orderBy('updated_at', 'desc')->where('tag','news')->simplePaginate(25);
        return view('news.list',['news'=>$news]);
    }

    public function new_detail($id)
    {
        $new = TheNew::find($id);
        return view('news.news_detail',['new'=>$new]);
    }

    public function cases_list()
    {
        $news = TheNew::orderBy('updated_at', 'desc')->where('tag','cases')->simplePaginate(25);
        return view('news.list',['news'=>$news]);
    }

    public function contact_service()
    {
        return view('contact_service');
    }

    public function company()
    {
        return view('company');
    }
    
    public function downloads()
    {
        return view('downloads');
    }
    
    public function operating()
    {
        return view('downloads_operating');
    }
    
    public function brochures()
    {
        return view('downloads_brochures');
    }
    
    public function miscellaneous()
    {
        return view('downloads_miscellaneous');
    }

    public function submit_ok()
    {
        return view('submit_ok');
    }
    
    public function sitemap()
    {
        echo simplexml_load_file('sitemap.xml')->asXML();
    }
}
