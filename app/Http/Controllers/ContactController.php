<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('layouts.public.contact-us', compact('contacts'));
    }

    public function store(Request $request)
    {
    if (empty($request->nama) || empty($request->email) || empty($request->nomor_hp) || empty($request->pesan_user)) {
        return redirect()->route('contact')->with('error', 'Tidak boleh ada inputan kosong. Semua wajib diisi!');
    }

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required',
        'message' => 'required',
    ]);

    try {
        DB::beginTransaction(); 
        $contacts = new Contact();
        $contacts->name = $request->nama;
        $contacts->email = $request->email;
        $contacts->phone_number = $request->phone_number;
        $contacts->message = $request->pesan_user;
        $contacts->save();

        $this->sendEmail($request->all());
        DB::commit();
        return redirect()->route('contact')->with('success', 'Yeeyy! Pesan Anda Telah Terkirim!');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->route('contact')->with('error', 'Oh no! Gagal Mengirim Pesan');
    }
}

private function sendEmail($data)
{
    Mail::send('emails.contact', $data, function($message) use ($data) {
        $message->to($data['email'], $data['nama'])
                ->subject('Email dari Buku Tamu');
    });
}
}