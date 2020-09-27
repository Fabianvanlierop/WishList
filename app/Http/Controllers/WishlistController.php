<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::get();

        return view('wishlist', ['wishlists' => $wishlists]);
    }

    public function add($id) {
        return view('add_item', ['list_id' => $id]);
    }

    public function create(Request $request) {
        $wishlist = new Wishlist;

        $wishlist->name = $request->name;
        $wishlist->user_id = auth()->user()->id;

        $wishlist->save();

        return redirect('/admin');
    }

    public function delete($id) {
        Wishlist::where('id', $id)->delete();
        return redirect('/admin');
    }
}
