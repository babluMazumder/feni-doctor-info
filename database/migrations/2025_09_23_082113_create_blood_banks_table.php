<?php

use App\Enums\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
           Schema::create('blood_banks', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // blood bank name
            $table->string('license_no')->nullable(); // optional license no
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('address');
            $table->string('district'); // or city
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->json('available_groups')->nullable(); // JSON field for storing blood groups and stock
            $table->unsignedTinyInteger('status')->default(Status::ACTIVE->value); // active/inactive
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_banks');
    }
};
