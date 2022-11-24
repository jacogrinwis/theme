<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = array('message' => 'Hello, World!');

        return view('admin.index')->with($data);
    }
}
