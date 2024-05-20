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

            $qr_content = $find_qr_data->content;
            $qr_id = $find_qr_data->qrcode_id;

            $qr_data = QrCode::format('svg')->size(300)->margin(3)->backgroundColor(255, 255, 255)->generate($qr_content);
            $qr_data = base64_encode($qr_data);

            return view('showqr', compact('qr_content', 'qr_id', 'qr_data'));

        } else {
            return redirect("/")->with('failure', 'Invalid QR code');
        }
    }
}
