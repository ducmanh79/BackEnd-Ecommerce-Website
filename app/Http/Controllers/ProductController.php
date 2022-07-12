<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use File;
use App\Models\Category;
use App\Models\ProductImages;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $categories = Category::all();
        $products = Product::with('category', 'images')->orderBy('id', 'ASC')->get();
        if($request->wantsJson()){
            return [
                'products' => $products
            ];
        }
        return view('products.list')->with(compact('products', 'categories'));
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
        $data = $request->all();
        $new_product = Product::create($data);
        $thumb = $request->file('thumbnail');
        $thumbName = $data['title'].'thumb-image-'.time().rand(1,1000).'.'.$thumb->extension();
        $thumb->move(public_path('storage/product_thumb/'), $thumbName);
        $new_product->thumbnail = $thumbName;
        if($request->has('images')){
            foreach($request->file('images')as $image){
                $imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('storage/product_images/'),$imageName);
                ProductImages::create([
                    'product_id'=>$new_product->id,
                    'image_path'=> $imageName
                ]);
            }
        }
        $new_product->save();
        return back()->with('success', 'added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Product $product)
    {
        //
        $images = $product->images()->get();
        $categories = Category::all();
        if($request->wantsJson()){
            return compact('product', 'images');
        }
        return view('products.show')->with(compact('product', 'images', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $images = $product->images()->get();
        $categories = Category::all();
        return view('products.show')->with(compact('product', 'categories', 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $images = $product->images()->get();

        foreach($images as $image){
            File::delete(public_path('storage/product_images/'.$image->image_path));
        }

        $product->delete();
        return back();
    }
}
