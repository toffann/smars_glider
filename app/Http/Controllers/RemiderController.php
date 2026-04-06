<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'reminder_time' => 'required',
        ]);

        // Simpan ke Database
        Reminder::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'reminder_time' => $request->reminder_time,
            'is_active' => true,
        ]);

        return back()->with('success', 'Pengingat berhasil disimpan!');
    }
}
