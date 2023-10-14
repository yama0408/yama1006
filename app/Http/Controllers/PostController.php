<?php

namespace App\Http\Controllers;
//名前空間

use App\Models\Post;
use Illuminate\Http\Request;
//外部にあるクラスをインポート


class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入
       //getPaginateByLimit()はPost.phpで定義したメソッドです。
    }
    
    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
    */
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}

?>