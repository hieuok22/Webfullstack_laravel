<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    public function getHome() {
        $data['comment'] = DB::table('v_comment')->count();
        $data['sanpham'] = DB::table('v_products')->count();
        $data['danhmuc'] = DB::table('v_categories')->count();
        $data['nguoidung'] = DB::table('v_users')->count();
        return view('backend.index',$data);
    }
    public function getLogout() {
        Auth::logout();
        return redirect() ->intended('login');
    }
}
