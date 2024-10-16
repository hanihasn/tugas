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
        Schema::create('extra_siswaa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("siswaa_id");
             $table->unsignedBigInteger("extra_id");
            $table->foreign("siswaa_id")->references("id")->on("extras")->onDelete("cascade");
            $table->foreign("extra_id")->references("id")->on("siswaas")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_siswaa');
    }
};