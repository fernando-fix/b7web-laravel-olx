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
        Schema::create('advertisement_images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('advertisement_id');
            $table->string('featured')->default(false);
            $table->timestamps();

            // Foreign keys
            $table->foreign('advertisement_id')->references('id')->on('advertisements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('advertisement_images', function (Blueprint $table) {
            $table->dropForeign(['advertisement_id']);
        });
        Schema::dropIfExists('advertisement_images');
    }
};
