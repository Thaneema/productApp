<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {   
        $target_file = NULL;
        if ($request->hasFile('img')){
            $target_dir = "product_img/";

            if(is_dir($target_dir) == false){

                mkdir('product_img');
            }

            $target_file = $target_dir.basename($_FILES["img"]["name"]);

            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        }
        
        $exist = Product::where('name','=',$request->get('product'))->first();
        if($exist){

            return redirect()->route('home.create')->with('exist', 'Already Exist...');

        
        }else{

            Product::create([
                                'name'            => $request->get('product'),
                                'description'     => $request->get('description'),
                                'image'           => $target_file,
                            ]);

        }


        return redirect()->route('home.index')->with('save','Saved Successfully.');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    // public function update(Request $request, $id)
    // {
    //     $product = Product::findOrFail($id);
    //     $product->update($request->all());
    //     return redirect()->route('home.index');
    // }
    public function update(Request $request)
    {   

        $product = product::find($request->get('prd_id'));
        
        $name    = Product::where('name','=',$request->get('product'))
                          ->where('id','!=',$product->id)
                          ->get();
       
        if(count($name) > 0){

            return redirect()->route('home.edit', ['home' => $product->id])->with('exist', 'Already Exist...');

        }
        else{

            $update = Product::where('id','=',$product->id)
                             ->update([
                                        'name'            => $request->get('product'),
                                        'description'     => $request->get('description'),
                                    ]);

        }

        if($request->get('delete_product') != null){
            Product::where('id','=',$product->id)
                   ->update(['image' => NULL]);
        }

        if ($request->hasFile('img')) {
            
            $target_dir = "product_img/";

            $e = Product::find($product->id);
            if($e->image != NULL){
                $v = public_path();
                $h = unlink($v.'/'.$e->image);
            }
            
            if(is_dir($target_dir) == false){
                mkdir('product_img');
            }

            $target_file = $target_dir.basename($_FILES["img"]["name"]);

            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

            
            if($request->get('delete_product') != null){
                $target_file = NULL;
            }

            Product::where('id','=',$product->id)
                   ->update(['image' => $target_file]);
        }

        return redirect()->route('home.index')->with('Update','Updated Successfully..');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('home.index');
    }
}
