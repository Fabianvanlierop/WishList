<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Wishlist;

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
        if (auth()->user()->role == "admin") {
            $lists = Wishlist::get();

            return view('admin', ['wishlists' => $lists]);
        } else {
            $lists = Wishlist::where('user_id', auth()->user()->id)->get();

            return view('admin', ['wishlists' => $lists]);
        }
    }
}
