<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up() :void
    {
        Schema::create('campaigns', function (Blueprint $table) {

            $table->id();
            $table->string('name', 45);
            $table->double('budget_max', 8, 2);
            $table->date('begin_date');
            $table->date('end_date');
            $table->string('file', 255);
            $table->time('display_minutes');
            $table->enum('status', ['actif', 'pending', 'inactif', 'finished'])->default('pending');
            $table->string('url', 255);
            $table->string('region')->references('region')->on('locations')->nullable(true);
            $table->string('city')->references('city')->on('locations')->nullable(true);
            $table->string('secteur')->references('secteur')->on('locations')->nullable(true);
            $table->foreignId('advertiser_id')->references('id')->on('advertisers');

            $table->timestamps();
        }
    );
    }
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
};
