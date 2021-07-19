<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Goods extends Controller
{
    public function create_view()
    {
        return view('CreateGods');
    }
    public function create(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $categories = $request->categories;
        $img = $request->img;
        DB::insert('insert into goods (name,price,category,img) values (?, ?, ?, ?)', [$name, $price,$categories,$img]);
    }
}
