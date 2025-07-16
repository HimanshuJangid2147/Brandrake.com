<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = AboutSection::paginate(10);
        return view('admin_pages.about.index', compact('aboutSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'section_title' => 'required|string|max:100',
            'section_subtitle' => 'required|string',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'list_item_1' => 'required|string',
            'list_item_2' => 'required|string',
            'list_item_3' => 'required|string',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('about', 'public');
        }

        AboutSection::create($data);

        return redirect()->route('admin.about.index')->with('success', 'About section created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin_pages.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin_pages.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutSection $about)
    {
        $request->validate([
            'section_title' => 'required|string|max:100',
            'section_subtitle' => 'required|string',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'list_item_1' => 'required|string',
            'list_item_2' => 'required|string',
            'list_item_3' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image_url')) {
            if ($about->image_url) {
                Storage::delete('public/' . $about->image_url);
            }
            $data['image_url'] = $request->file('image_url')->store('about', 'public');
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About section updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSection $about)
    {
        if ($about->image_url) {
            Storage::delete('public/' . $about->image_url);
        }
        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'About section deleted');
    }
}
