<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message. We will get in touch with you shortly.',
        ]);
    }
}
