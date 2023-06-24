<?php

namespace App\Http\Controllers;

use App\Models\GenerateCode;
use Illuminate\Http\Request;

class GenerateCodeController extends Controller
{

    private function QrContentEncryption()
    {
        $QrContent = Crypt::encryptString($QrData['content']);
    }

    public function Qrfunction(Request $request)
    {
        $QrData = $request->validate([
            'content' => 'required|string|max:5000',
        ]);
    }
}
