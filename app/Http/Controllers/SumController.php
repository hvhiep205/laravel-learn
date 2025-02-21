<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sum(Request $request)
    {
        // Kiểm tra nếu request là POST và có dữ liệu nhập vào
        if ($request->isMethod('post')) {
            $number1 = $request->input('number1');
            $number2 = $request->input('number2');
            $sum = $number1 + $number2;
            return view('sum', ['sum' => $sum]);
        }
        return view('sum');
    }
}
