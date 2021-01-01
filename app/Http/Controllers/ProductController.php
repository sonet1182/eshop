<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Sell;
//use Illuminate\Contracts\Session\Session;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail',['products'=>$data]);
    }

    function search(Request $req){
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList(){
        $userId=Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function order(){
        $userId=Session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('order',['total'=>$total,'products'=>$products]);
    }

    function sells(Request $req){
        $userId=Session::get('user')['id'];
        $allcart = Cart::where('user_id',$userId)->get();
        foreach($allcart as $cart){
            $sell = new Sell;
            $sell->product_id = $cart['product_id'];
            $sell->user_id = $cart['user_id'];
            $sell->status ="Pending";
            $sell->payment_method =$req->payment;
            $sell->payment_status ="Pending";
            $sell->address =$req->address;
            $sell->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }


    function myorder(){
        $userId=Session::get('user')['id'];
        $products = DB::table('sells')
        ->join('products','sells.product_id','=','products.id')
        ->where('sells.user_id',$userId)
        ->get();

        return view('myorders',['products'=>$products]);
    }
}