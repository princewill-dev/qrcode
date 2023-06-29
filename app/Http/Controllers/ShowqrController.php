<?php

namespace App\Http\Controllers;

use App\Models\GenerateCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ShowqrController extends Controller
{
    public function showcode($qrcode_id)
    {
        $find_qr_data = GenerateCode::where('qrcode_id', $qrcode_id)->first();

        if ($find_qr_data) {

            $decrypted_qr_content = Crypt::decryptString($find_qr_data->content);
            $qr_id = $find_qr_data->qrcode_id;

            //$qr_data = QrCode::generate("$decrypted_qr_content");

            $qr_data = QrCode::generate("$decrypted_qr_content", public_path("qr_images/$qr_id.svg") );

            return view('showqr', compact('decrypted_qr_content', 'qr_id', 'qr_data'));

        } else {
            return redirect("/")->with('failure', 'Invalid QR code');
        }
    }
}
