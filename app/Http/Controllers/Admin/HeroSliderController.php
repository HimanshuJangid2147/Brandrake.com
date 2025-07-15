<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSliderController extends Controller
{
    /**
     * Display a listing of the hero slides.
     */
    public function index()
    {
        $slides = HeroSlider::latest()->get();
        return view('admin.hero_slider.index', compact('slides'));
    }

    /**
     * Store a newly created hero slide in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image_url')) {
            $validated['image_url'] = $request->file('image_url')->store('hero_slider', 'public');
        }

        HeroSlider::create($validated);

        return redirect()->route('admin.hero_slider.index')->with('success', 'Slide added successfully.');
    }

    /**
     * Remove the specified hero slide from storage.
     */
    public function destroy(HeroSlider $heroSlider)
    {
        if ($heroSlider->image_url) {
            Storage::disk('public')->delete($heroSlider->image_url);
        }
        $heroSlider->delete();
        return redirect()->route('admin.hero_slider.index')->with('success', 'Slide deleted successfully.');
    }

    /**
     * Toggle the active status of a slide.
     */
    public function toggleStatus(HeroSlider $heroSlider)
    {
        $heroSlider->is_active = !$heroSlider->is_active;
        $heroSlider->save();
        return redirect()->route('admin.hero_slider.index')->with('success', 'Slide status updated.');
    }
}
