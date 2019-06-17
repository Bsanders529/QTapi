<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    return Product::all();
    
    
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product([

            'upc'=>$request->input('upc'),
            'name'=>$request->input('name'),
            'brand'=>$request->input('brand'),
            'company'=>$request->input('company'),
            'color'=>$request->input('color'),
            'desc'=>$request->input('description'),
            'dimension'=>$request->input('dimension'),
            'size'=>$request->input('size'),
            'weight'=>$request->input('weight'),
          
        ]);

        

        $product->save();
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
        $products = Product::find($id);

        //return view('product.show', compact('products'));
        
                
       json_encode($products)->header("Access-Control-Allow-Origin: *");
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $product = App\Product::find(1);

        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->size = $request->size;
        $product->quantity = $request->quantity;
        $product->upc = $request->upc;

        
        $product->save();

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        $product = App\Product::find($id);

        $product->delete();
    }
}
