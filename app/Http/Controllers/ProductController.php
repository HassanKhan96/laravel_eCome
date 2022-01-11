<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

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
    public function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }

    public function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    public function orderNow(){
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*')->sum('products.price');
        return view('ordernow',['total'=>$total]);
        //$total = DB::select('SELECT SUM(p.price) as total, p.* FROM cart c JOIN products p ON p.id = c.product_id WHERE c.user_id = ? GROUP BY p.id, p.name, p.price, p.category, p.description, p.imageUrl, p.created_at, p.updated_at',[$userId]);
        //dd($total);

    }
    public function placeOrder(Request $req){
        $userId = Session::get('user')['id'];
        $cartItems = Cart::where('user_id', $userId)->get();
        foreach($cartItems as $item){
            $order = new Order;
            $order->product_id = $item['product_id'];
            $order->user_id = $item['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        return redirect('/');
    }

    public function myOrders(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $userId)
        ->select('products.*', 'orders.*')
        ->get();
        return view('myorders',['orders'=>$orders]);
    }
    public function cancelOrder($id){
        //$userId = Session::get('user')['id'];
        Order::where('id', $id)->delete();
        return redirect('/myorders');
    }
}
