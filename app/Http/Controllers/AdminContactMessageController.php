<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminContactMessageController extends Controller
{
    /**
     * Display all contact messages.
     */
    public function index()
    {
        $messages = ContactMessage::orderBy('id', 'desc')->get();

        return view(
            'admin.messages',
            compact('messages')
        );
    }


    /**
     * Display a single contact message.
     */
    public function show($id)
    {
        $message = ContactMessage::findOrFail($id);

        // Mark message as read
        if ($message->status !== 'read') {
            $message->update([
                'status' => 'read',
            ]);
        }

        return view(
            'admin.message-details',
            compact('message')
        );
    }


    /**
     * Mark message as read.
     */
    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);

        $message->update([
            'status' => 'read',
        ]);

        return back()->with(
            'success',
            'Message has been marked as read.'
        );
    }


    /**
     * Delete contact message.
     */
    public function destroy($id)
    {
        $message = ContactMessage::findOrFail($id);

        $message->delete();

        return redirect()
            ->route('admin.messages.index')
            ->with(
                'success',
                'Message has been deleted successfully.'
            );
    }
}
