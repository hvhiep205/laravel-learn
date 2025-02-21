<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $title = 'đây là tiêu đề';
        $description = 'đây là dòng mô tả';
        $copyright = 'học web chuẩn';
        return view('welcome')->with(['title'=>$title, 'description'=>$description, 'copyright'=>$copyright]);
    }
}
