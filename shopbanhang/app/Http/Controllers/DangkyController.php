<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class DangkyController extends Controller
{
   public function getDangky() {
    return view('backend.dangky');
   }
   public function postDangky(Request $request) {
        $users = new users;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->level = "1";
        $users->save();
        return view('backend.dangky');
   }
}
