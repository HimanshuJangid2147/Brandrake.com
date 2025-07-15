<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSection;
use App\Models\ContactInfo;
use App\Models\CallToAction;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Show the form for editing the About Section.
     */
    public function editAbout()
    {
        $about = AboutSection::firstOrFail();
        return view('admin.settings.about', compact('about'));
    }

    /**
     * Update the About Section in storage.
     */
    public function updateAbout(Request $request)
    {
        $about = AboutSection::firstOrFail();
        // Validation logic here...
        $validated = $request->validate([
            'section_title' => 'required|string|max:100',
            // Add all other fields...
            'image_url' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image_url')) {
            if ($about->image_url) {
                Storage::disk('public')->delete($about->image_url);
            }
            $validated['image_url'] = $request->file('image_url')->store('settings', 'public');
        }

        $about->update($validated);
        return back()->with('success', 'About Section updated successfully.');
    }

    /**
     * Show the form for editing Contact Info.
     */
    public function editContact()
    {
        $contact = ContactInfo::firstOrFail();
        return view('admin.settings.contact', compact('contact'));
    }

    /**
     * Update the Contact Info in storage.
     */
    public function updateContact(Request $request)
    {
        $contact = ContactInfo::firstOrFail();
        // Validation and update logic here...
        $contact->update($request->all());
        return back()->with('success', 'Contact Info updated successfully.');
    }

    // You can add similar edit/update methods for CallToAction and SiteSettings
}
