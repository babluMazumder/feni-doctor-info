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
        Schema::create('ambulances', function (Blueprint $table) {
              $table->id();
            $table->string('service_name'); // ambulance provider or hospital
            $table->string('ambulance_type'); // AC, Non-AC, ICU, Freezer, etc.
            $table->string('registration_no')->unique();
            $table->string('driver_name');
            $table->string('driver_phone')->unique();
            $table->string('phone'); 
            $table->string('email')->nullable(); 
            $table->text('address');
            $table->string('district'); 
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->unsignedTinyInteger('status')->default(Status::ACTIVE->value); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambulances');
    }
};
