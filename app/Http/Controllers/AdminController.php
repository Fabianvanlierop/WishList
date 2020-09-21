<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Item;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::get();

        return view('admin', ['items' => $items]);
    }
}
