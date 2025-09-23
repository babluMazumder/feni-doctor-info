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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // hospital/clinic name
            $table->enum('type', ['hospital', 'clinic', 'diagnostic_center', 'other']); // type
            $table->string('registration_no')->nullable(); // optional govt reg no
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('address');
            $table->string('district'); // or city
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('website_url')->nullable();
            $table->unsignedTinyInteger('status')->default(\App\Enums\Status::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
