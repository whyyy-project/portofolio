<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('wahyu@sirese.biz.id') // email tujuan
                        ->subject($data['subject'])
                        ->from('wahyu@sirese.biz.id', 'Website Contact') // kirim dari domain sendiri
                        ->replyTo($data['email'], $data['name']); // balasan ke pengirim
            });

            return back()->with('success', 'Pesan Anda berhasil dikirim!');
        } catch (Exception $e) {
            return back()->with('failed', 'Gagal mengirim pesan. Coba lagi nanti.');
        }
    }
}
