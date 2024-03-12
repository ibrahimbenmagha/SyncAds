<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->time('opening_hour');
            $table->time('closing_hour');
            $table->string('day', 10);
            $table->foreignId('business_id')->references('id')->on('businesses');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
