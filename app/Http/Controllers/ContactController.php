<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;
 
class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Data form
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'body'    => $request->message,
        ];

        // Kirim email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('wahyu@sirese.biz.id')
                    ->subject($data['subject'])
                    ->setBody(
                        new TextPart(
                            "Nama: {$data['name']}\nEmail: {$data['email']}\n\nPesan:\n{$data['body']}"
                        )
                    );
        });

        // Redirect balik dengan pesan sukses
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
