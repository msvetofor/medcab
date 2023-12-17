<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('doctor');
            $table->text('description');
            $table->date('started_at');
            $table->date('ended_at');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('diseases');
    }
};
