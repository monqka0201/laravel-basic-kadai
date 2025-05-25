<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // クエリビルダでpostsテーブルの全データを取得
        $posts = DB::table('posts')->get();
        // 変数$postsをposys/index.blade/phpにファイルを渡す
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        // Elopuentを使用し、URL'/posts/{id}の{id}部分と主キー（idカラム）の値が一致するデータをpostsテーブルから取得し、変数$postに代入
        $post = Post::find($id);

        // 変数$postをposts/show.blade.phpファイルに渡す
        return view('posts.show', compact('post'));
    }
}
