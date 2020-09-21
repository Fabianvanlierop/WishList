<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::get();

        return view('wishlist', ['items' => $items]);
    }

    public function create(Request $request) {
        $item = new Item;

        if ($files = $request->image) {
            $destinationPath = 'images';
            $itemImage = $files->getClientOriginalName();
            $item->image = $itemImage;

            $files->move($destinationPath, $itemImage);
        }

        $item->name = $request->itemname;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->link = $request->link;

        $item->save();

        return redirect('/admin');
    }

    public function delete($id) {
        Item::where('id', $id)->delete();
        return redirect('/admin');
    }
}
