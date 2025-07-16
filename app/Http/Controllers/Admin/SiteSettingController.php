<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::firstOrCreate([]);
        return view('admin_pages.general_settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'store_name' => 'required|string|max:100',
            'store_email' => 'required|email|max:100',
            'store_phone' => 'required|string|max:50',
            'app_link' => 'nullable|url',
            'store_address' => 'required|string',
            'store_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'is_maintenance_mode' => 'required|boolean',
            'maintenance_message' => 'nullable|string',
            'notification_text' => 'nullable|string',
            'herosection_title' => 'nullable|string',
            'herosection_text' => 'nullable|string',
            'herosection_description' => 'nullable|string',
            'logo_url' => 'nullable|url',
            'favicon_url' => 'nullable|url',
            'footer_copyright' => 'nullable|string',
        ]);

        $settings = SiteSetting::firstOrCreate([]);

        $data = $request->all();
        if ($request->hasFile('store_logo')) {
            if ($settings->store_logo) {
                Storage::delete('public/' . $settings->store_logo);
            }
            $data['store_logo'] = $request->file('store_logo')->store('logos', 'public');
        }

        $settings->update($data);

        return redirect()->route('admin.general_settings.index')->with('success', 'Settings updated successfully');
    }
}
