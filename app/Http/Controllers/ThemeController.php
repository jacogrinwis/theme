<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    public function forms()
    {
        return view('theme.forms');
    }

    public function alerts()
    {
        return view('theme.alerts');
    }

    public function tables()
    {
        $items = Tables::all();

        return view('theme.tables', compact('items'));
    }

    public function buttons()
    {
        return view('theme.buttons');
    }

    public function example()
    {



        return view('theme.example');
    }
}
