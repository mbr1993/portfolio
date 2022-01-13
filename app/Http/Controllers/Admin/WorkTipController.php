<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkTip;
use Illuminate\Http\Request;

class WorkTipController extends Controller
{
    public function index()
    {
        $tips = WorkTip::query()->paginate(10);
        return view('admin.work-tips.index', compact('tips'));
    }

    public function create()
    {
        return view('admin.work-tips.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:work_tips|max:255'
        ]);
        $tips = new WorkTip();
        $tips->fill($data);

        $notification = array(
            'message' => 'Work Tip has been successfully created',
            'alert-type' => 'success'
        );
        if ($tips->save()) {
            return redirect()->route('admin.workTips.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function edit(WorkTip $tip)
    {
        return view('admin.work-tips.edit', ['tip' => $tip]);
    }

    public function update(Request $request, WorkTip $tip)
    {
        $data = $request->validate([
            'name' => 'required|unique:work_tips,name,' . $tip->id
        ]);
        $notification = array(
            'message' => 'Work Tip has been deleted successfully',
            'alert-type' => 'info');

        if ($tip->update($data)) {
            return redirect()->route('admin.workTips.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function delete(WorkTip $tip)
    {
        $notification = [
            'message' => 'Blog Tip has been deleted successfully',
            'alert-type' => 'info'
        ];

        if ($tip->delete())
            return back()->with($notification);
        return back();
    }
}
