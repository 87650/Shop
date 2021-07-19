<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function categories_get(){
        $categories = DB::select('select * from categories');
        return [
            'categories' => $categories,
        ];
    }
    public function categories_set(Request $request){
        $categories = $request->categories;
        $img = $request->img;
        DB::insert('insert into categories (categories,img) values (?, ?)', [$categories, $img]);
    }
}
