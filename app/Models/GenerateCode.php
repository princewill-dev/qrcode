<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'qrcode_id',
        'is_email_sent',
        'email_sent_to',
        'status',
        'content',
        'content_type'
    ];
}
