<?php

use App\Models\Reminder;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Http;

// Mengecek database setiap menit untuk mengirim notifikasi
Schedule::call(function () {
    $now = now()->format('H:i'); // Mengambil jam sekarang (HH:mm)
    
    // Cari pengingat yang waktunya sama dengan menit sekarang
    $reminders = Reminder::with('user')->where('reminder_time', $now)->where('is_active', true)->get();

    foreach ($reminders as $r) {
        // Contoh integrasi Fonnte (WhatsApp Gateway)
        Http::withHeaders([
            'Authorization' => 'TOKEN_FONNTE_KAMU',
        ])->post('https://api.fonnte.com/send', [
            'target' => $r->user->whatsapp, // Pastikan kolom whatsapp ada di tabel user
            'message' => "🐾 SIGER Reminder\nHalo " . $r->user->name . ", sudah saatnya memberikan " . $r->type . " untuk sugar glider kesayanganmu! ✨",
        ]);
    }
})->everyMinute();