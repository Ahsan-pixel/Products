<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $Products= DB::select('SELECT * FROM Products');
        return view('Products.index')->with('Products',$Products);
    }
    public function create(request $request)
    {
        dd($request->all());
            $ProductsName=new Products;
        $ProductsName->name=$request->input('name');
        $ProductsName->title=$request->input('title');
        $ProductsName->description=$request->input('description');
        $ProductsName->save();
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required','body'=>'required']);

        $Product=new Products;
        $Product->name=$request->input('name');
        $Product->title=$request->input('title');
        $Product->description=$request->input('description');
        $Product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product= Products::find($id);
        return view('Products.show')->with('Product',$Product);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = Products::find($id);
        return view('Products.edit')->with('Product',$Product);
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
        $request->validate(['title'=>'required','body'=>'required']);

        $Product=Products::Find($id);
        $Product->name=$request->input('name');
        $Product->title=$request->input('title');
        $Product->description=$request->input('description');
        $Product->save();
        return redirect('/Products')->with('success','Product Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ProductsName=Products::find($id);
        $ProductsName->delete();
        return redirect('/Products')->with('success','Product removed');
    }
}
