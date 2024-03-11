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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            // $table->string('user_id');
            // $table->string('business_type_id');
            // $table->string('business_activity_id');

            // Clés étrangères
                $table->foreignId('user_id')->references('id')->on('users');
                $table->foreignId('business_type_id')->references('id')->on('business_types');
                $table->foreignId('business_activity_id')->references('id')->on('business_activities');

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
        Schema::dropIfExists('businesses');
    }
};
