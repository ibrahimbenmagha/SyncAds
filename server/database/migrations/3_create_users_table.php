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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 65)->unique();
            $table->string('password', 255);
            $table->string('name', 45);
            $table->string('phone', 45);
            $table->string('address', 255);
            $table->enum('status', ['activated', 'suspended', 'desactivated'])->default('desactivated');
            $table->enum('role', ['advertiser', 'business', 'admin']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
