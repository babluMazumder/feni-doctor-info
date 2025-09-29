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
        Schema::create('doctors', function (Blueprint $table) {
           $table->id();

            // Basic Info
            $table->string('name', 150);

            // Professional Info
            $table->string('specialization', 150)->nullable();
            $table->string('qualification', 200)->nullable();
            $table->string('designation', 150)->nullable();
            $table->string('hospital_name', 200)->nullable();

            // Visiting Info
            $table->string('visiting_hours', 100)->nullable();
            $table->string('days', 100)->nullable();
            $table->string('room_no', 150)->nullable();
            $table->decimal('visiting_fee', 10, 2)->nullable();

            // Contact & Profile
            $table->string('contact_number', 20)->nullable();
            $table->foreignId('profile_photo')->nullable()
                  ->constrained('uploads')->nullOnDelete();

            // SEO & Category
            $table->string('slug')->unique();
            $table->foreignId('category_id')->nullable()
                  ->constrained('categories')->nullOnDelete();

            // Status & Timestamps
            $table->tinyInteger('status')->default(Status::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
