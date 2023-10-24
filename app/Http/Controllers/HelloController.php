<?php

// クラスの住所(同じ名前のクラスが存在しても識別できるようになる)
namespace App\Http\Controllers;

// このファイルを使いますという宣言
// あらかじめuse宣言を行うことで、クラス名を記述するだけで呼び出せるようになる
use Illuminate\Http\Request;

// ①
// view()へルパ関数でビューを指定するときはresources/viewsを省略し、「フォルダ名.ファイル名(.blade.phpは不要)」と記述。
// ただしフォルダ直下に作成した場合はフォルダ名は不要
class HelloController extends Controller {
    public function index() {
        $name = '侍 太郎';
        $languages = ['HTML', 'CSS', 'Javascript', 'PHP'];

        // 変数$nameをindex.blade.phpファイルに渡す(変数前の$は不要)
        // compact()関数＝引数に渡された変数とその値から配列を作成し、戻り値として返す関数
        // return view('index', compact('name'));

        // 変数$name、$languagesをindex.blade.phpファイルに渡す
        return view('index', compact('name', 'languages'));
    }
}
