<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogTip;
use Illuminate\Http\Request;

class BlogTipController extends Controller
{
    public function index()
    {
        $tips = BlogTip::query()->paginate();
        return view('admin.blog-tips.index', ['tips' => $tips]);
    }

    public function create()
    {
        return view('admin.blog-tips.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            //'style' => 'required|string|max:255'
        ]);

        $tip = new BlogTip();
        $tip->fill($data);
        $notification = array(
            'message' => 'Blog Tip has been created successfully',
            'alert-type' => 'success'
        );
        if ($tip->save()) {
            return redirect()->route('admin.blogTips.index')->with($notification);
        }
//        if (BlogTip::query()->create($data)){
//            return redirect()->route('admin.blogTips.index');
//        }
        return back()->withErrors($data);
    }

    public function edit(BlogTip $tip)
    {
        return view('admin.blog-tips.edit', ['tip' => $tip]);
    }

    public function update(Request $request, BlogTip $tip)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $notification = array(
            'message' => 'Blog Tip has been deleted successfully',
            'alert-type' => 'info');

        if ($tip->update($data)) {
            return redirect()->route('admin.blogTips.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function delete(BlogTip $tip)
    {
        $notification = array(
            'message' => 'Blog Tip has been deleted successfully',
            'alert-type' => 'info');

        if ($tip->delete())
            return back()->with($notification);
        return back();
    }
}
