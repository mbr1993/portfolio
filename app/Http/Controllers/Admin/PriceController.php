<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::query()->paginate();
        return view('admin.price.index', ['prices' => $prices]);
    }

    public function create()
    {
        return view('admin.price.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:prices|max:255',
            'price' => 'required|integer'
        ]);

        $notification = [
            'message' => 'The Price has been successfully created!',
            'alert-type' => 'success'
        ];

        $price = new Price();
        $price->fill($data);

        if ($price->save()) {
            return redirect()->route('admin.price.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function edit(Price $price)
    {
        return view('admin.price.edit', ['price' => $price]);
    }

    public function update(Request $request, Price $price)
    {
        $data = $request->validate([
            'name' => 'required|max:255|unique:prices,name,' . $price->id,
            'price' => 'required|integer'
        ]);

        $notification = [
            'message' => 'The Price has been successfully updated!',
            'alert-type' => 'success'];
        if ($price->update()) {
            return redirect()->route('admin.price.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function delete(Price $price)
    {
        $notification = [
            'message' => 'The Price has been successfully updated!',
            'alert-type' => 'success'];

        if ($price->delete()) {
            return redirect()->route('admin.price.index')->with($notification);
        }
        return back();
    }
}
