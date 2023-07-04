<?php

namespace App\Http\Controllers;

use App\Models\GenerateCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function downloadFunction($qrcode_id)
    {
        $find_qr_file = GenerateCode::where('qrcode_id', $qrcode_id)->first();

        if ($find_qr_file) {

            $filePath = public_path("qr_images/$qrcode_id.png");
            $fileName = "My-Qrcode-$qrcode_id.png";
            
            return Response::download($filePath, $fileName);

        } else {
            return redirect("/")->with('failure', 'Invalid QR code');
        }
    }
}
