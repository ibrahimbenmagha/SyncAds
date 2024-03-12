<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->boolean('available');
            // $table->enum('status', ['actif', 'pending', 'inactif', 'finished'])->default('pending');
            $table->enum('city', ["Casablanca"])->nullable(true);
            $table->string('secteur')->nullable(true);
            $table->foreignId('business_id')->references('id')->on('businesses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
