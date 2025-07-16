<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('admin_pages.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin_pages.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required|string|max:100',
            'author_position' => 'required|string|max:100',
            'author_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quote' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $data = $request->all();
        if ($request->hasFile('author_image')) {
            $data['author_image'] = $request->file('author_image')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial created');
    }

    public function show(Testimonial $testimonial)
    {
        return view('admin_pages.testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin_pages.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'author_name' => 'required|string|max:100',
            'author_position' => 'required|string|max:100',
            'author_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quote' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $data = $request->all();
        if ($request->hasFile('author_image')) {
            if ($testimonial->author_image) {
                Storage::delete('public/' . $testimonial->author_image);
            }
            $data['author_image'] = $request->file('author_image')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->author_image) {
            Storage::delete('public/' . $testimonial->author_image);
        }
        $testimonial->delete();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial deleted');
    }
}
