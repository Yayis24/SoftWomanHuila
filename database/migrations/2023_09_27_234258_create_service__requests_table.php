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
        Schema::create('service__requests', function (Blueprint $table) {
            $table->id();
            $table->integer('apple_service_id')->onDelete('cascade');
            $table->date('date');
            $table->time('hour');
            $table->integer('women_id')->onDelete('cascade');
            $table->string('observation');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service__requests');
    }
};
