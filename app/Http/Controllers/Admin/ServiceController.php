<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()->paginate();
        return view('admin.services.index', ['services' => $services]);
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'logo' => 'required|image'
        ]);

        $notification = [
            'message' => 'User Profile has been successfully updated',
            'alert-type' => 'success'];

        $data['logo'] = $request->file('logo')->store('services', 'public');
        $service = new Service();
        $service->fill($data);
        if ($service->save()) {
            return redirect()->route('admin.service.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', ['service' => $service]);
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'logo' => 'nullable|image'
        ]);

        $notification = [
            'message' => 'User Profile has been successfully updated',
            'alert-type' => 'success'];

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('services', 'public');
            $temp = $service->logo;
        }
        if ($service->update($data)) {
            if (isset($temp)) {
                Storage::disk('public')->delete($temp);
            }
            return redirect()->route('admin.service.index')->with($notification);
        }
        return back()->withErrors($data);
    }

    public function delete(Service $service)
    {
        $notification = array(
            'message' => 'Blog Tip has been deleted successfully',
            'alert-type' => 'info');
        if ($service->delete())
            return back()->with($notification);
        return back()->with(['message' => 'Error deleting data', 'alert-type' => 'error']);
    }
}
