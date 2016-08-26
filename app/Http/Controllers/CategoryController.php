<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth as QiniuAuth;
use Qiniu\Storage\BucketManager;
use Storage;

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

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '.'.$entension;

            Storage::put($key,file_get_contents($request->file('main_pic')->getRealPath()));

            $category->main_pic = 'app/'.$key;
        }
        if ($request->file('banner')) {

            $filePath = $request->file('banner');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category/banner_' . $request->name . '.'.$entension;

            Storage::put($key,file_get_contents($request->file('banner')->getRealPath()));

            $category->banner = 'app/'.$key;
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

        return view('admin.category_edit',['category'=>$category]);
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

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '.'.$entension;

            Storage::put($key,file_get_contents($request->file('main_pic')->getRealPath()));

            $category->main_pic = 'app/'.$key;
        }
        if ($request->file('banner')) {

            $filePath = $request->file('banner');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'category/banner_' . $request->name . '_'.$entension;

            Storage::put($key,file_get_contents($request->file('banner')->getRealPath()));

            $category->banner = 'app/'.$key;
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
        if ($category['main_pic']){
            Storage::delete(str_replace("app/","",$category['main_pic']));
        }
        if ($category['banner']){
            Storage::delete(str_replace("app/","",$category['banner']));
        }
        $category->delete();
        return redirect('/admin/categories');
    }
}
