<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Portfolio::firstOrCreate([]);
        return view('admin_pages.portfolio.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'portfolio_title' => 'required|string|max:100',
            'portfolio_description' => 'required|string',
            'portfolio_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $settings = Portfolio::findOrFail($id);
        $settings->update($request->all());

        if ($request->hasFile('portfolio_image')) {
            if ($settings->image) {
                Storage::delete($settings->image);
            }
            $settings->image = $request->file('portfolio_image')->store('portfolios');
            $settings->save();
        }

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
