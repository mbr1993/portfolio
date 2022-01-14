<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with(['user'])->paginate();
        return view('admin.profile.index', ['profiles' => $profiles]);
    }

    public function edit(Profile $profile)
    {
        $profile->user;
        return view('admin.profile.edit', ['profile' => $profile]);
    }

    public function update(Request $request, Profile $profile)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'about_user' => 'required|string|max:1000',
            'age' => 'required|integer',
            'residence' => 'required|string|max:255',
            'is_available' => 'nullable|integer',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required',
            'image' => 'nullable|image'
        ]);

        $notification = [
            'message' => 'User Profile has been successfully updated',
            'alert-type' => 'success'
        ];

        if ($request->hasFile('image')) {
            $data['avatar'] = $request->file('image')->store('profile', 'public');
            $temp = $profile->avatar;
        }
        if ($profile->update($data)) {
            if (isset($temp)) {
                Storage::disk('public')->delete($temp);
            }
            return redirect()->route('admin.profile.index')->with($notification);
        }
        return back()->withErrors($data);
    }
}
