<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        // Ambil data kontak pertama
        $contacts = Contact::first();

        // Pastikan data tidak null
        if ($contacts === null) {
            // Buat data dummy jika data tidak ada
            $contacts = new Contact();
            $contacts->name = 'vanisa';
            $contacts->email = 'izsa30@gmail.com';
            $contacts->phonenumber = '132454657576';
        }

        return view('layouts.public.contact-us', compact('contacts'));
    }
}


