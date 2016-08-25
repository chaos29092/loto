<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth as QiniuAuth;
use Qiniu\Storage\BucketManager;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Category::orderBy('updated_at', 'desc')->get();

        return view('admin.categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'main_pic' => 'image',
            'banner' => 'image',
        ]);

        $category = new \App\Category();
        $category->name = $request->name;
        $category->max_temp = $request->max_temp;
        $category->description = $request->description;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category_' . $request->name . '.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->main_pic = $key;
        }
        if ($request->file('banner')) {

            $filePath = $request->file('banner');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category_banner_' . $request->name . '.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->banner = $key;
        }

        $category->save();
        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = \App\Category::find($id);

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);
        $key1 = $category->main_pic;
        $key2 = $category->banner;

        list($ret1, $err1) = $bucketMgr->stat($bucket, $key1);
        $main_pic = !$err1;
        list($ret2, $err2) = $bucketMgr->stat($bucket, $key2);
        $banner=!$err2;
        
        
        return view('admin.category_edit',['category'=>$category,'main_pic'=>$main_pic,'banner'=>$banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'main_pic' => 'image',
            'banner' => 'image',
        ]);

        $category = \App\Category::find($id);
        $category->name = $request->name;
        $category->max_temp = $request->max_temp;
        $category->description = $request->description;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category_' . $request->name . '.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->main_pic = $key;
        }
        if ($request->file('banner')) {

            $filePath = $request->file('banner');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category_banner_' . $request->name . '_'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->banner = $key;
        }

        $category->save();
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = \App\Category::find($id);
        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);
        $key = $category->main_pic;
        $key2 = $category->banner;
        $bucketMgr->delete($bucket, $key);
        $bucketMgr->delete($bucket, $key2);
        $category->delete();
        return redirect('/admin/categories');
    }
}
