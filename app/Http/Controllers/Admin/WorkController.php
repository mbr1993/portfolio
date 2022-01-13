<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Models\WorkTip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::query()->with(['workTip'])->paginate();
        return view('admin.works.index', ['works' => $works]);
    }

    public function create()
    {
        $tips = WorkTip::query()->get();
        return view('admin.works.create', ['tips' => $tips]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'work_tip_id' => 'required|exists:work_tips,id',
            'name' => 'required|string|max:255',
            'image' => 'required|image'
        ]);

        $data['image'] = $request->file('image')->store('works', 'public');

        $work = new Work();
        $work->fill($data);
        if ($work->save()) {
            return redirect()->route('admin.works.index');
        }
        return back()->withErrors($data);
    }

    public function edit(Work $work)
    {
        $tips = WorkTip::query()->get();
        return view('admin.works.edite', ['work' => $work, 'tips' => $tips]);
    }

    public function update(Request $request, Work $work)
    {
        $data = $request->validate([
            'work_tip_id' => 'required|exists:work_tips,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('works', 'public');
            $temp = $work->image;
        }
        if ($work->update($data)) {
            if (isset($temp)) {
                Storage::disk('public')->delete($temp);
            }
            return redirect()->route('admin.works.index');
        }
        return back()->withErrors($data);
    }

    public function delete(Work $work)
    {
        $notification = array(
            'message' => 'Blog Tip has been deleted successfully',
            'alert-type' => 'info');

        if ($work->delete())
            return back()->with($notification);
        return back();
    }

}
