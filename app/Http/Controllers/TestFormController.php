<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    public function showForm()
    {
        return view('testForm');
    }
}
