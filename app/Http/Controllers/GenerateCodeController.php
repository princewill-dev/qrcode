<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\GenerateCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class GenerateCodeController extends Controller
{

    private function QrContentEncryption($validate_qr_data)
    {
        $encrypt_content = Crypt::encryptString($validate_qr_data['content']);
        return $encrypt_content;
    }

    public function Qrfunction(Request $request)
    {

        $generate_qr_code_id = Str::random(10);
        
        $validate_qr_data = $request->validate([
            'content' => 'required|string|max:5000',
        ]);

        $encrypted_qr_content = $this->QrContentEncryption($validate_qr_data);

        //$encryptedNoteData = $this->encryptNoteData($noteData);

        $generate_code = new GenerateCode;
        $generate_code->qrcode_id = $generate_qr_code_id;
        $generate_code->content = $encrypted_qr_content;
        $generate_code->save();

        //return redirect("code/")->with('success', 'Here is your QR-code');

        return redirect("/$generate_qr_code_id")->with('success', 'Here is your QR-code');


    }
}
