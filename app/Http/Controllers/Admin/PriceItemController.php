<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\PriceItem;
use Illuminate\Http\Request;

class PriceItemController extends Controller
{
    public function index()
    {
        $items = PriceItem::query()->with('price')->paginate();
        return view('admin.price-items.index', ['items' => $items,]);
    }

    public function create()
    {
        $prices = Price::query()->get();
//
//        $list= [
//            ['value' => 1, 'name'=>'Include'],
//            ['value' => 0, 'name'=>'Not Include'],
//        ];
        return view('admin.price-items.create', ['prices' => $prices]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'price_id' => 'required',
            'is_include' => 'required|integer',
            'name' => 'required|unique:price_items|string|max:255'
        ]);

        $notification = [
            'message' => 'The Price Item has been successfully created!',
            'alert-type' => 'success'];

        $priceItem = new PriceItem();
        $priceItem->fill($data);

        if ($priceItem->save()) {
            return redirect()->route('admin.priceItem.index')->with($notification);
        }
        return back()->withErrors($data);
    }
}
