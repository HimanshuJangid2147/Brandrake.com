<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $contactInfos = ContactInfo::paginate(10);
        return view('admin_pages.contact.index', compact('contactInfos'));
    }

    public function create()
    {
        return view('admin_pages.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'opening_hours' => 'required|string|max:255',
        ]);

        ContactInfo::create($request->all());

        return redirect()->route('admin.contact.index')->with('success', 'Contact info created');
    }

    public function show(ContactInfo $contact)
    {
        return view('admin_pages.contact.show', compact('contact'));
    }

    public function edit(ContactInfo $contact)
    {
        return view('admin_pages.contact.edit', compact('contact'));
    }

    public function update(Request $request, ContactInfo $contact)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'opening_hours' => 'required|string|max:255',
        ]);

        $contact->update($request->all());

        return redirect()->route('admin.contact.index')->with('success', 'Contact info updated');
    }

    public function destroy(ContactInfo $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Contact info deleted');
    }
}
