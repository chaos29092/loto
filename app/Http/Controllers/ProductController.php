<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth as QiniuAuth;
use Qiniu\Storage\BucketManager;


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
        return view('admin.product_create');
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

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('mainpic')) {

            $filePath = $request->file('mainpic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product_' . $request->name . '.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->mainpic = $key;
        }
        if ($request->file('categorypic')) {

            $filePath = $request->file('categorypic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product_' . $request->name . '_category.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->categorypic = $key;
        }

        $product->save();
        return redirect('/admin');
    }

    public function edit($id)
    {
        $models = \App\ProductModel::where('product_id',$id)->get();
        $product = \App\Product::find($id);
        $categories = \App\Category::all();

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);
        $key1 = $product->mainpic;
        $key2 = $product->categorypic;

        list($ret1, $err1) = $bucketMgr->stat($bucket, $key1);
        $mainpic = !$err1;
        list($ret2, $err2) = $bucketMgr->stat($bucket, $key2);
        $categorypic=!$err2;

        return view('admin.product_edit', ['product' => $product,'categories'=>$categories,'models'=>$models,'mainpic'=>$mainpic,'categorypic'=>$categorypic]);
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

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('mainpic')) {

            $filePath = $request->file('mainpic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product_' . $request->name . '.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->mainpic = $key;
        }
        if ($request->file('categorypic')) {

            $filePath = $request->file('categorypic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product_' . $request->name . '_category.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->categorypic = $key;
        }


        $product->save();
        return redirect('/admin');

    }

    public function destroy($id)
    {
        $product = \App\Product::find($id);

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);
        $key = $product->mainpic;
        $key2 = $product->categorypic;
        $bucketMgr->delete($bucket, $key);
        $bucketMgr->delete($bucket, $key2);
        $product->delete();
        $models = \App\ProductModel::where('product_id',$id)->delete();
        return redirect('/admin');
    }


}
