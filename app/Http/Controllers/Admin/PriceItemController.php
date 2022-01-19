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
        return view('admin.price-items.create', ['prices' => $prices]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'price_id' => 'required',
            'is_include' => 'required|integer',
            'name' => 'required|unique:price_items,name|string|max:255'
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

    public function edit(PriceItem $item)
    {
        $prices = Price::query()->get();
        return view('admin.price-items.edit', compact('prices', 'item'));
    }

    public function update(Request $request, PriceItem $item)
    {
        $data = $request->validate([
            'price_id' => 'required|exists:prices,id',
            'is_include' => 'required|integer',
            'name' => 'required|string|max:255|unique:price_items,name,' . $item->id
        ]);

        $notification = [
            'message' => 'The Price Item has been successfully updated!',
            'alert-type' => 'success'];
        if ($item->update($data)) {
            return redirect()->route('admin.priceItem.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function delete(PriceItem $item)
    {
        $notification = [
            'message' => 'Price Item has been successfully deleted!',
            'alert-type' => 'success'
        ];

        if ($item->delete()) {
            return back()->with($notification);
        }
        return back();
    }
}
