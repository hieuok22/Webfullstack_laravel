<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
use App\Models\Order;
use Mail;
use Session;
class CartController extends Controller
{
   public function getAddCart($id) {
    $product = Product::find($id);
        Cart::add(['id'=> $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => 
        $product->prod_price, 'options' => ['img' => $product->prod_img]]);
        return redirect('cart/show');
   }  
   public function getShowCart() {
      $data['total'] = Cart::Total();
      $data['items'] = Cart::content();
      return view('frontend.cart', $data);
   }
   public function getDeleteCart($id) {
      if($id == 'all') {
         Cart::destroy();
      } else {
         Cart::remove($id);
      }
      return back();
   }
   public function getUpdateCart(Request $request) {
      Cart::update($request->rowId, $request->qty);
   } 
   public function postComplete(Request $request) {
      // $cart = Session::get('cart');
      // // dd($cart);
      foreach(Cart::content() as $row) {
         // dd($row);
      $order = new Order;
      $order->order_status = '0';
      $order->prod_id = $row->id;
      $order->order_tensanpham = $row->name;
      $order->order_soluong = $row->qty;
      $order->order_tongtien = $row->price;
      $order->order_email = $request->email;
      $order->order_name = $request->name;
      $order->order_sdt = $request->phone;
      $order->order_add = $request->add;
      $order->save();
   }
// -------------email--------------------------------
      $data['info'] = $request->all();
      $email = $request->email;
      $data['total'] = Cart::total();
      $data['cart'] = Cart::content();

      Mail::send('frontend.email', $data, function ($message) use ($email) {
         $message -> from('hieulv.21ad@vku.udn.vn', 'Hieulee');
         $message -> to($email, $email);
         $message -> cc('levanhieu22042003@gmail.com', 'Lê Văn Hiếu');
         $message -> subject('Xác nhận hóa đơn mua hàng HAN-SHOP');
      });
      Cart::destroy();
      return redirect('complete');
   }   
   public function getComplete() {
      return view('frontend.complete');
   }
}
