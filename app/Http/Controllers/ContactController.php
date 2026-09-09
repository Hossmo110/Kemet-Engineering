<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display Contact Us page.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store contact message.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create([
            'name' => trim(
                $validated['first_name'] . ' ' . $validated['last_name']
            ),

            'email' => $validated['email'],

            'phone' => $validated['phone'] ?? null,

            'company' => null,

            'subject' => $validated['subject'],

            'message' => $validated['message'],

            'status' => 'New',
        ]);

        return redirect()
            ->back()
            ->with('success', 'Your message has been sent successfully.');
    }
}
