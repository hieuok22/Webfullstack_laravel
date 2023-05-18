<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\Controller;
use App\Models\Comment;
use DB;
class CommentController extends Controller
{
    public function getComment() {
        $data['commentlist'] = DB::table('v_comment')->orderBy('com_id','desc')->get();
        return view('backend.comment',$data);
    }
    public function getDeleteComment($id) {
        Comment::destroy($id);
        return back();
    }
}
