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
            $table->time('display_hours');
            $table->enum('status', ['actif', 'pending', 'inactif', 'finished'])->default('pending');
            $table->string('url', 255);
            $table->unsignedBigInteger('advertiser_id');

            // Define foreign key constraint
            $table->foreign('advertiser_id')->references('id')->on('advertiser')->onDelete('cascade');

            $table->timestamps();
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
};
