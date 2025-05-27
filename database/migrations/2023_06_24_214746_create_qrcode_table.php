<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('qrcode', function (Blueprint $table) {
            $table->id();
            $table->string('qrcode_id', 255)->unique();
            $table->string('is_email_sent')->default(0);
            $table->longText('email_sent_to')->nullable();
            $table->string('status')->default('active');
            $table->longText('content');
            $table->string('content_type')->default('Na');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qrcode');
    }
};
