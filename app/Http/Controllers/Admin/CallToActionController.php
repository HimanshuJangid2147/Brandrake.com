<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallToAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CallToActionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = CallToAction::paginate(10);
        return view('admin_pages.cta.index', compact('callToAction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_pages.cta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'button_text' => 'required|string|max:50',
            'button_url' => 'required|string|max:255',
        ]);

        $data = $request->all();
        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')->store('call_to_action', 'public');
        }

        CallToAction::create($data);

        return redirect()->route('admin.call_to_action.index')->with('success', 'Call to action created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin_pages.cta.show', compact('call_to_action'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin_pages.cta.edit', compact('call_to_action'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CallToAction $call_to_action)
    {
        $request->validate([
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'button_text' => 'required|string|max:50',
            'button_url' => 'required|string|max:255',
        ]);

        $data = $request->all();
        if ($request->hasFile('background_image')) {
            if ($call_to_action->background_image) {
                Storage::delete('public/' . $call_to_action->background_image);
            }
            $data['background_image'] = $request->file('background_image')->store('call_to_action', 'public');
        }

        $call_to_action->update($data);

        return redirect()->route('admin.call_to_action.index')->with('success', 'Call to action updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CallToAction $call_to_action)
    {
        if ($call_to_action->background_image) {
            Storage::delete('public/' . $call_to_action->background_image);
        }
        $call_to_action->delete();

        return redirect()->route('admin.call_to_action.index')->with('success', 'Call to action deleted');
    }
}
