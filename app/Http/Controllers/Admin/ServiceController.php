<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $services = Service::paginate(10);
        return view('admin_pages.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin_pages.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon_class' => 'required|string|max:50',
            'box_color' => 'required|string|max:20',
            'title' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        Service::create($request->all());

        return redirect()->route('admin.service.index')->with('success', 'Service created');
    }

    public function show(Service $service)
    {
        return view('admin_pages.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin_pages.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'icon_class' => 'required|string|max:50',
            'box_color' => 'required|string|max:20',
            'title' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        $service->update($request->all());

        return redirect()->route('admin.service.index')->with('success', 'Service updated');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.service.index')->with('success', 'Service deleted');
    }

}
