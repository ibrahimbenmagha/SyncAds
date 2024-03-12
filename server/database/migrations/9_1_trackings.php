<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('type', 45);
            $table->datetime('date');
            $table->time('display_time');
            $table->foreignId('campaign_id')->references('id')->on('campaigns');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('trackings');
    }
};
