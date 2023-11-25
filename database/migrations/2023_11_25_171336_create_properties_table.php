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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps()->nullable();
            $table->string('ptype_id->nullable()');
            $table->string('amenitis_id')->nullable();
            $table->string('property_name');
            $table->string('property_slug')->nullable();
            $table->string('amenitis_code')->nullable();
            $table->string('property_status');
            $table->string('lowest_price')->nullable();
            $table->string('max_price')->nullable();
            $table->string('property_thumbnail')->nullable();
            $table->string('short_descp')->nullable();
            $table->text('long_descp')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('garage')->nullable();
            $table->string('garage_size')->nullable();
            $table->string('property_size')->nullable();
            $table->string('property_video')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip code')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('featured')->nullable();
            $table->string('hot')->nullable();
            $table->integar('agent_id')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
