+<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use App\Enums\Status;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('author')->constrained('users')->onDelete('cascade');
                $table->string('title')->nullable();
                $table->string('slug')->nullable();
                $table->string('date')->nullable();
                $table->longText('description')->nullable();
                $table->bigInteger('banner')->nullable();
                $table->integer('status')->default(Status::ACTIVE->value)->comment(Status::ACTIVE->value . '= ' . __('status.' . Status::ACTIVE->value) . ',' . Status::INACTIVE->value . '= ' . __('status.' . Status::INACTIVE->value));
                $table->bigInteger('position')->nullable();
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
            Schema::dropIfExists('blogs');
        }
    };
