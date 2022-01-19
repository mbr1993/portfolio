<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FactController extends Controller
{
    public function index()
    {
        $facts = Fact::query()->paginate();
        return view('admin.facts.index', ['facts' => $facts]);
    }

    public function create()
    {
        return view('admin.facts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image'
        ]);

        $notification = [
            'message' => 'Message has been created successfully',
            'alert-type' => 'info'
        ];

        $data['icon'] = $request->file('image')->store('facts', 'public');

        $fact = new Fact();
        $fact->fill($data);
        if ($fact->save()) {
            return redirect()->route('admin.facts.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function edit(Fact $fact)
    {
        return view('admin.facts.edit', ['fact' => $fact]);
    }

    public function update(Request $request, Fact $fact)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image'
        ]);

        $notification = [
            'message' => 'Message has been created successfully',
            'alert-type' => 'success'
        ];

        if ($request->hasFile('image')) {
            $data['icon'] = $request->file('image')->store('facts', 'public');
            $temp = $fact->icon;
        }

        if ($fact->update($data)) {
            if (isset($temp)) {
                Storage::disk('public')->delete($temp);
            }
            return redirect()->route('admin.facts.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function delete(Fact $fact)
    {
        $notification = [
            'message' => 'Price Item has been successfully deleted!',
            'alert-type' => 'success'
        ];

        if ($fact->delete()) {
            return back()->with($notification);
        }
        return back();
    }
}
