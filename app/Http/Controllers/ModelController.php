<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ModelController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product_id = $id;
        return view('admin.model_create',['product_id'=>$product_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        $model = new \App\ProductModel();
        $model->name = $request->name;
        $model->main = $request->main;
        $model->more = $request->more;
        $model->product_id = $request->product_id;

        $model->save();
        return redirect('/admin/product/'.$request->product_id.'/edit');

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
        $model = \App\ProductModel::find($id);
        return view('admin.model_edit',['model'=>$model]);
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
        $this->validate($request,[
            'name'=>'required',
        ]);
        
        $model = \App\ProductModel::find($id);
        $model->name = $request->name;
        $model->main = $request->main;
        $model->more = $request->more;
        $model->product_id = $request->product_id;

        $model->save();
        return redirect('/admin/product/'.$request->product_id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model= \App\ProductModel::find($id);
        $product_id = $model['product_id'];
        $model->delete();
        return redirect('/admin/product/'.$product_id.'/edit');

    }
}
