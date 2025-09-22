<?php

use App\Enums\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->string('link')->nullable();
            $table->string('position')->default(0)->nullable();
            $table->integer('status')->default(Status::ACTIVE->value)->comment(Status::ACTIVE->value.'= '.__('status.'.Status::ACTIVE->value).','.Status::INACTIVE->value.'= '.__('status.'.Status::INACTIVE->value));
            $table->timestamps();

            $table->index('status');
            $table->index('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_links');
    }
};
