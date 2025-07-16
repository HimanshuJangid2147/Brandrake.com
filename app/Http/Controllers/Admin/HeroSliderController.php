<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $heroSliders = HeroSlider::paginate(10);
        return view('admin_pages.heroslider.index', compact('heroSliders'));
    }

    public function create()
    {
        return view('admin_pages.heroslider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $data = $request->all();
        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('hero_slider', 'public');
        }

        HeroSlider::create($data);

        return redirect()->route('admin.heroslider.index')->with('success', 'Hero slider created');
    }

    public function show(HeroSlider $hero_slider)
    {
        return view('admin_pages.heroslider.show', compact('hero_slider'));
    }

    public function edit(HeroSlider $hero_slider)
    {
        return view('admin_pages.heroslider.edit', compact('hero_slider'));
    }

    public function update(Request $request, HeroSlider $hero_slider)
    {
        $request->validate([
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $data = $request->all();
        if ($request->hasFile('image_url')) {
            if ($hero_slider->image_url) {
                Storage::delete('public/' . $hero_slider->image_url);
            }
            $data['image_url'] = $request->file('image_url')->store('hero_slider', 'public');
        }

        $hero_slider->update($data);

        return redirect()->route('admin.heroslider.index')->with('success', 'Hero slider updated');
    }

    public function destroy(HeroSlider $hero_slider)
    {
        if ($hero_slider->image_url) {
            Storage::delete('public/' . $hero_slider->image_url);
        }
        $hero_slider->delete();

        return redirect()->route('admin.heroslider.index')->with('success', 'Hero slider deleted');
    }
}
