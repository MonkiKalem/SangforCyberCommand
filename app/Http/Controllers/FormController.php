<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validasi data input
        $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'corporate-email' => 'required|email|max:255',
            'job-title' => 'required|string|max:255',
            'company-name' => 'required|string|max:255',
            'phone-number' => 'required|string|max:15', // Validasi untuk phone number
            'industry' => 'required|string',
            'agree' => 'accepted',
        ]);

        // Logika penyimpanan data (misal, simpan ke database)
        // Anda bisa membuat model dan tabel untuk menyimpan data form ini

        // Redirect ke halaman "Thank You" setelah berhasil
        return redirect()->route('thankyou.page')->with('success', 'Form submitted successfully!');
    }
}
