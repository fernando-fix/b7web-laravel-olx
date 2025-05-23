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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->float('price', 8, 2);
            $table->text('description');
            $table->string('contact');
            $table->integer('views')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('advertisements', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['state_id']);
            $table->dropForeign(['category_id']);
        });
        Schema::dropIfExists('advertisements');
    }
};
