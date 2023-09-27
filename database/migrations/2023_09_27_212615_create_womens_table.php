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
        Schema::create('womens', function (Blueprint $table) {
            $table->id();
            $table->string('document_type');
            $table->string('document');
            $table->string('name');
            $table->string('last_name');
            $table->integer('number');
            $table->string('city');
            $table->string('address');
            $table->string('ocuppation');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('womens');
    }
};
