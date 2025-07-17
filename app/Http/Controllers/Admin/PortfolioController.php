<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(9);
        return view('admin_pages.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin_pages.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'full_content' => 'nullable|string', // Changed to nullable
            'mockup_image' => 'required|image',
            'gallery_images.*' => 'nullable|image',
        ]);

        $data = $request->only('title', 'description', 'full_content');

        if ($request->hasFile('mockup_image')) {
            $data['mockup_image'] = $request->file('mockup_image')->store('portfolio/featured', 'public');
        }

        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $file) {
                $galleryPaths[] = $file->store('portfolio/gallery', 'public');
            }
            $data['gallery_images'] = $galleryPaths;
        }

        Portfolio::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created successfully.');
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin_pages.portfolio.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin_pages.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'full_content' => 'nullable|string', // Changed to nullable
            'mockup_image' => 'nullable|image',
            'gallery_images.*' => 'nullable|image',
        ]);

        $data = $request->only('title', 'description', 'full_content');

        if ($request->hasFile('mockup_image')) {
            if ($portfolio->mockup_image) {
                Storage::disk('public')->delete($portfolio->mockup_image);
            }
            $data['mockup_image'] = $request->file('mockup_image')->store('portfolio/featured', 'public');
        }

        if ($request->hasFile('gallery_images')) {
            if ($portfolio->gallery_images) {
                foreach ($portfolio->gallery_images as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $file) {
                $galleryPaths[] = $file->store('portfolio/gallery', 'public');
            }
            $data['gallery_images'] = $galleryPaths;
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->mockup_image) {
            Storage::disk('public')->delete($portfolio->mockup_image);
        }
        if ($portfolio->gallery_images) {
            foreach ($portfolio->gallery_images as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
