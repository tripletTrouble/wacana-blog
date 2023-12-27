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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug', 300)->unique('IX_unique_slug_posts');
            $table->string('excerpt', 500);
            $table->text('content');
            $table->string('tags');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id')->nullable()->references('id')->on('categories')->nullOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('views')->default(0);
            $table->unsignedInteger('loves')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
