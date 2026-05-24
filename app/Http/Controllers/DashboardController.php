<?php

namespace App\Http\Controllers;

use App\Models\PhilosophyValue;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Training;
use App\Models\Podcast;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the main admin dashboard page.
     */
    public function index()
    {
        $counts = [
            'philosophy' => PhilosophyValue::count(),
            'experiences' => Experience::count(),
            'services' => Service::count(),
            'trainings' => Training::count(),
            'podcasts' => Podcast::count(),
            'messages' => ContactMessage::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
        ];

        $recentMessages = ContactMessage::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('counts', 'recentMessages'));
    }

    /**
     * Show all contact messages inbox.
     */
    public function inbox()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Mark a contact message as read.
     */
    public function markAsRead(ContactMessage $message)
    {
        $message->update(['is_read' => true]);
        return response()->json(['success' => true]);
    }

    /**
     * Delete a contact message.
     */
    public function deleteMessage(ContactMessage $message)
    {
        $message->delete();
        return redirect()->route('admin.inbox')->with('success', 'Pesan berhasil dihapus.');
    }
}
