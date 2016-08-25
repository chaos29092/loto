<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth as QiniuAuth;
use Qiniu\Storage\BucketManager;

class TheNewController extends Controller
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
        $news = \App\TheNew::orderBy('updated_at','desc')->select('id','title','tag','updated_at')->paginate(20);
        return view('admin.news',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new_create');
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
            'title' => 'required',
            'image' => 'image',
        ]);
        
        $new = new \App\TheNew();
        $new->title = $request->title;
        $new->profile = $request->profile;
        $new->body = $request->body;
        $new->tag = $request->tag;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('image')) {
            $filePath = $request->file('image');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'new_'.$request->title.'.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $new->image =  $key;
        }

        $new->save();
        return redirect('/admin/new');


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
        $new = \App\TheNew::find($id);

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);
        $key = $new->image;

        list($ret, $err) = $bucketMgr->stat($bucket, $key);
        $image = !$err;
        
        return view('admin.new_edit',['new'=>$new,'image'=>$image]);
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
            'title' => 'required',
            'image' => 'image',
        ]);

        $new = \App\TheNew::find($id);
        $new->title = $request->title;
        $new->profile = $request->profile;
        $new->body = $request->body;
        $new->tag = $request->tag;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('image')) {

            $filePath = $request->file('image');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'new_'.$request->title.'.'.$entension;
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $new->image = $key;
        }

        $new->save();
        return redirect('/admin/new');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = \App\TheNew::find($id);

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);

        $token = $auth->uploadToken($bucket);
        $key = $new->image;
        $bucketMgr->delete($bucket, $key);

        $new->delete();
        return redirect('/admin/new');

    }
}
