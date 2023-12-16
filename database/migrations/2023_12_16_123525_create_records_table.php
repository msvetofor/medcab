<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('doctor')->nullable();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->text('treatment')->nullable();
            $table->date('started_at')->nullable();
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
