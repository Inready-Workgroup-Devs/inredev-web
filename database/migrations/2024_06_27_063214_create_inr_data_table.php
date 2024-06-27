<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInrDataTable extends Migration
{
    public function up()
    {
        Schema::create('inr_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auth_id')->constrained('auths');
            $table->string('name');
            $table->string('photo_profile');
            $table->enum('class', ['Pendiri', '1','2', '3', '4', '5','6','7','8','9','10','11','12','13', '14','15']);
            $table->timestamps();
            $table->softDeletes();


        });
    }

    public function down()
    {
        Schema::dropIfExists('inr_data');
    }
}