<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:100',
            'author_position' => 'required|string|max:100',
            'quote' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'author_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('author_image')) {
            $validated['author_image'] = $request->file('author_image')->store('testimonials', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added successfully.');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:100',
            'author_position' => 'required|string|max:100',
            'quote' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'author_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('author_image')) {
            if ($testimonial->author_image) {
                Storage::disk('public')->delete($testimonial->author_image);
            }
            $validated['author_image'] = $request->file('author_image')->store('testimonials', 'public');
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->author_image) {
            Storage::disk('public')->delete($testimonial->author_image);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
