<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth as QiniuAuth;
use Qiniu\Storage\BucketManager;
use Storage;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at', 'desc')->select('id','name','category_id','updated_at')->paginate(20);
        $categories = Category::all();

        return view('admin.home', ['products' => $products, 'categories' => $categories]);
    }

    public function create()
    {
    	$categories = Category::all();
        return view('admin.product_create',['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mainpic' => 'image',
            'categorypic' => 'image',
        ]);

        $product = new \App\Product();
        $product->name = $request->name;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->profile = $request->profile;
        $product->main = $request->main;
        $product->standard = $request->standard;
        $product->options = $request->options;
        $product->categorypara = $request->categorypara;
        $product->category_id = $request->category_id;



        if ($request->file('mainpic')) {

            $filePath = $request->file('mainpic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '.'.$entension;

            Storage::put($key,file_get_contents($request->file('mainpic')->getRealPath()));

            $product->mainpic = 'app/'.$key;
        }
        if ($request->file('categorypic')) {

            $filePath = $request->file('categorypic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '_category.'.$entension;

            Storage::put($key,file_get_contents($request->file('categorypic')->getRealPath()));
            $product->categorypic = 'app/'.$key;
        }

        $product->save();
        return redirect('/admin');
    }

    public function edit($id)
    {
        $models = \App\ProductModel::where('product_id',$id)->get();
        $product = \App\Product::find($id);
        $categories = \App\Category::all();

        return view('admin.product_edit', ['product' => $product,'categories'=>$categories,'models'=>$models]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'mainpic' => 'image',
            'categorypic' => 'image',
        ]);

        $product = \App\Product::find($id);
        $product->name = $request->name;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->profile = $request->profile;
        $product->main = $request->main;
        $product->standard = $request->standard;
        $product->options = $request->options;
        $product->categorypara = $request->categorypara;
        $product->category_id = $request->category_id;

        if ($request->file('mainpic')) {

            $filePath = $request->file('mainpic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '.'.$entension;

            Storage::put($key,file_get_contents($request->file('mainpic')->getRealPath()));
            $product->mainpic = 'app/'.$key;
        }
        if ($request->file('categorypic')) {

            $filePath = $request->file('categorypic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '_category.'.$entension;

            Storage::put($key,file_get_contents($request->file('categorypic')->getRealPath()));

            $product->categorypic = 'app/'.$key;
        }


        $product->save();
        return redirect('/admin');

    }

    public function destroy($id)
    {
        $product = \App\Product::find($id);
        if ($product['mainpic']){
            Storage::delete(str_replace("app/","",$product['mainpic']));
        }
        if ($product['categorypic']){
            Storage::delete(str_replace("app/","",$product['categorypic']));
        }
        $product->delete();
        $models = \App\ProductModel::where('product_id',$id)->delete();
        return redirect('/admin');
    }


}
