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
        Schema::create('blood_donors', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();

            $table->date('last_donation_date')->nullable();

           $table->string('gender');        // will store Gender enum
            $table->string('blood_group');   // will store BloodGroup enum
            $table->string('availability');  // will store Availability enum
             $table->unsignedTinyInteger('status')->default(Status::ACTIVE->value); // active/inactive

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_donors');
    }
};
