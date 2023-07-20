<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Routing\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    //
    public function index()
    {
        $title="Welcome to Products Data Market. Enjoy !!";
        return view('Pages.index')->with('title',$title);
    }
    public function About()
    {
        $title="About us !!";
        return view('Pages.about')->with('title',$title);
    }
    public function services()
    {
        $data=array(
            'title'=>'services',
            'services'=>['ProductsName','Details','Quantity']
        );
        return view('Pages.services')->with($data);
    }
    public function ProductsName(request $request)
    {
        $ProductsName=new Products;
        $ProductsName->name=$request->input('name');
        $ProductsName->title=$request->input('title');
        $ProductsName->description=$request->input('description');
        $ProductsName->save();
    
    }
}
