<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 2048);
            $table->string('slug', length: 2048);
            $table->string('thumbnail', length: 2048)->nullable();
            $table->longText('body');
            $table->boolean('active');
            $table->dateTime('published_at')->nullable();
            $table->foreignIdFor(User::class, 'user_id');
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
