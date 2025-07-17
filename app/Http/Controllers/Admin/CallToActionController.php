<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallToAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CallToActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // --- THIS IS THE FIX ---
        // We fetch the first (and only) Call to Action record.
        // firstOrCreate() ensures a record exists, preventing errors on new installs.
        $callToAction = CallToAction::firstOrCreate([]);

        // We then pass the single $callToAction object to the view.
        return view('admin_pages.cta.index', compact('callToAction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cta = CallToAction::first();
        if ($cta) {
            return redirect()->route('admin.call_to_action.edit', $cta->id);
        }
        return view('admin_pages.cta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'button_text' => 'required|string|max:50',
            'button_url' => 'required|url',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('background_image')->store('cta', 'public');

        CallToAction::create(array_merge($request->all(), ['background_image' => $imagePath]));

        return redirect()->route('admin.call_to_action.index')->with('success', 'Call to Action section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CallToAction $callToAction)
    {
        return view('admin_pages.cta.show', compact('callToAction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CallToAction $callToAction)
    {
        return view('admin_pages.cta.edit', compact('callToAction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CallToAction $callToAction)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'button_text' => 'required|string|max:50',
            'button_url' => 'required|url',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('background_image');

        if ($request->hasFile('background_image')) {
            if ($callToAction->background_image) {
                Storage::disk('public')->delete($callToAction->background_image);
            }
            $data['background_image'] = $request->file('background_image')->store('cta', 'public');
        }

        $callToAction->update($data);

        return redirect()->route('admin.call_to_action.index')->with('success', 'Call to Action section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CallToAction $callToAction)
    {
        if ($callToAction->background_image) {
            Storage::disk('public')->delete($callToAction->background_image);
        }
        $callToAction->delete();

        return redirect()->route('admin.call_to_action.index')->with('success', 'Call to Action section deleted successfully.');
    }
}
