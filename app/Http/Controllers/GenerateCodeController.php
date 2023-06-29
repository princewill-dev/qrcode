<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\GenerateCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class GenerateCodeController extends Controller
{

    public function Qrfunction(Request $request)
    {

        $generate_qr_code_id = Str::random(10);
        
        $validate_qr_data = $request->validate([
            'content' => 'required|string|max:5000',
        ]);

        $encrypted_qr_content = Crypt::encryptString($validate_qr_data['content']);
        $generate_code = new GenerateCode;
        $generate_code->qrcode_id = $generate_qr_code_id;
        $generate_code->content = $encrypted_qr_content;
        $generate_code->save();

        return redirect("/$generate_qr_code_id")->with('success');

    }
}
