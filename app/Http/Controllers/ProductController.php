<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return View('product', ['products'=>$data]);
    }
    public function detail($id){
        $data = Product::find($id);
        return View('detail',['product' => $data]);
    }
    public function search(Request $req){
        $data = Product::where('category', 'like', "%".$req->input('query')."%")->get();
        return View('search',['products'=>$data]);
    }
    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')->id;
            $cart->product_id = $req->input('product_id');
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    public static function getCartCount(){
        $userId = Session::get('user')['id'];
        $cartCount = Cart::where('user_id', $userId)->count();
        return $cartCount;
    }
}
