<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class PostController extends Controller
{
    public function index() {
        // クエリビルダでpostsテーブルの全データを取得
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }
}
