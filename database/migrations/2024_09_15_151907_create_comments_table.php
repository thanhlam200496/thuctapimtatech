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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comments_content')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('article_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->cascadeOnDelete();
            // $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
