<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->with(['blogTip'])
            ->paginate();
        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        $tips = BlogTip::query()->get();
        return view('admin.blogs.create', ['tips' => $tips]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'blog_tip_id' => 'required|exists:blog_tips,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
            'date' => 'required|date_format:Y-m-d',
            'image' => 'required|image'
        ]);

        $data['photo'] = $request->file('image')->store('blogs', 'public');

        $blog = new Blog();
        $blog->fill($data);
        if ($blog->save()) {
            return redirect()->route('admin.blogs.index');
        }
        return back()->withErrors($data);
    }

    public function edit(Blog $blog)
    {
        $tips = BlogTip::query()->get();
        return view('admin.blogs.edite', ['tips' => $tips, 'blog' => $blog]);
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'blog_tip_id' => 'required|exists:blog_tips,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
            'date' => 'required|date_format:Y-m-d',
            'image' => 'nullable|image'
        ]);

        $notification = [
            'message' => 'User Profile has been successfully updated',
            'alert-type' => 'info'
        ];

        if ($request->hasFile('image')) {
            $data['photo'] = $request->file('image')->store('blogs', 'public');
            $temp = $blog->photo;
        }

        if ($blog->update($data)) {
            if (isset($temp)) {
                Storage::disk('public')->delete($temp);
            }
            return redirect()->route('admin.blogs.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function delete(Blog $blog)
    {
        if ($blog->delete()) {
            return redirect()->route('admin.blogs.index');
        }
        return back()->withErrors([]);
    }
}
