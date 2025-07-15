<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the portfolio items.
     */
    public function index()
    {
        $portfolioItems = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index', compact('portfolioItems'));
    }

    /**
     * Show the form for creating a new portfolio item.
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created portfolio item in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cost' => 'required|string|max:100',
            'case_study_url' => 'nullable|url',
            'behance_url' => 'nullable|url',
            'mockup_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background_video' => 'nullable|file|mimes:mp4,mov,ogg,qt|max:20000',
            'style' => 'required|string|in:light,dark',
        ]);

        if ($request->hasFile('mockup_image')) {
            $validated['mockup_image'] = $request->file('mockup_image')->store('portfolio/images', 'public');
        }

        if ($request->hasFile('background_video')) {
            $validated['background_video'] = $request->file('background_video')->store('portfolio/videos', 'public');
        }

        Portfolio::create($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created successfully.');
    }

    /**
     * Show the form for editing the specified portfolio item.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified portfolio item in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cost' => 'required|string|max:100',
            'case_study_url' => 'nullable|url',
            'behance_url' => 'nullable|url',
            'mockup_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background_video' => 'nullable|file|mimes:mp4,mov,ogg,qt|max:20000',
            'style' => 'required|string|in:light,dark',
        ]);

        if ($request->hasFile('mockup_image')) {
            // Delete old image if it exists
            if ($portfolio->mockup_image) {
                Storage::disk('public')->delete($portfolio->mockup_image);
            }
            $validated['mockup_image'] = $request->file('mockup_image')->store('portfolio/images', 'public');
        }

        if ($request->hasFile('background_video')) {
             // Delete old video if it exists
            if ($portfolio->background_video) {
                Storage::disk('public')->delete($portfolio->background_video);
            }
            $validated['background_video'] = $request->file('background_video')->store('portfolio/videos', 'public');
        }

        $portfolio->update($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated successfully.');
    }

    /**
     * Remove the specified portfolio item from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        // Delete files from storage
        if ($portfolio->mockup_image) {
            Storage::disk('public')->delete($portfolio->mockup_image);
        }
        if ($portfolio->background_video) {
            Storage::disk('public')->delete($portfolio->background_video);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
