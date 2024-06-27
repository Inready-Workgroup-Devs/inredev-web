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
        Schema::create('donaturs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auth_id')->constrained('auths')->onDelete('cascade');
           $table->enum("status", ["active", "inactive"]);
            $table->bigInteger("total_price");
            $table->timestamps();
            $table->softDeletes();

   });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donaturs');
    }
};