<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        // --- THIS IS THE FIX ---
        // This ensures we always get the single 'About' section record.
        // firstOrCreate() will get the first record, or create a new empty one
        // if the table is empty. This prevents errors on new installations.
        $aboutSection = AboutSection::firstOrCreate([]);

        // Pass the single $aboutSection object to the view.
        return view('admin_pages.about.index', compact('aboutSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Since there should only be one, we redirect to the edit page if it exists.
        $aboutSection = AboutSection::first();
        if ($aboutSection) {
            return redirect()->route('admin.about.edit', $aboutSection->id);
        }
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
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image_url')->store('about_section', 'public');

        AboutSection::create(array_merge($request->all(), ['image_url' => $imagePath]));

        return redirect()->route('admin.about.index')->with('success', 'About section created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSection $about)
    {
        // The route model binding correctly finds the section to edit.
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
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image_url');

        if ($request->hasFile('image_url')) {
            if ($about->image_url) {
                Storage::disk('public')->delete($about->image_url);
            }
            $data['image_url'] = $request->file('image_url')->store('about_section', 'public');
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSection $about)
    {
        if ($about->image_url) {
            Storage::disk('public')->delete($about->image_url);
        }
        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'About section deleted successfully.');
    }
}
