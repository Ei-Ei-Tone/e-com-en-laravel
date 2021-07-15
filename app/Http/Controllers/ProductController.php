<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

/**
 * SystemName : Laravel-Training01
 * ModuleName : Product
 */
class ProductController extends Controller
{   
/**
 * Show the application dashboard
 *
 * @return \Illuminate\Http\Response
 */
    function index()
    {
        // return "Welcome to product page.";
        // return Product::all();

            /**
             * The data associated with the model
             *
             * @var string
            */
            $data= Product::all();

        return view('product',['products'=>$data]);
    }

    /**
     * Show the application dashboard
     *
     * @param $id
     * @return \Illuminate\Http\Response
    */
    function detail($id) 
    {
        // return Product::find($id);
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }

    /**
     * Show the application dashboard
     *
     * @param $req
     * @return \Illuminate\Http\Request
    */
    function search(Request $req)
    {
        $data=Product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }

    /**
     * Show the application dashboard
     *
     * @param $req
     * @return \Illuminate\Http\Request
    */
    function addToCart(Request $req)
    {   
        if($req->session()->has('user'))
        {
            // return "Hello";
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save(); //Add to DB
            return redirect('/');
        }
        else {
            return redirect('/login');
        }
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Request
    */
    static function cartItem()
    {
        $userId=\Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count( );
    }
}
