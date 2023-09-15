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
        Schema::create('affiliate_location_data', function (Blueprint $table) {
            $table->integer('affiliate_id')->primary(); // Set 'affiliate_id' as the primary key
            $table->string('latitude');
            $table->string('longitude');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_location_data');
    }
};
