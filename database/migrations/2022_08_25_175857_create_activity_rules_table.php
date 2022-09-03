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
    public function up()
    {
        Schema::create('activity_rules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->bigInteger('activity_id')->index();
            $table->double('min_score')->index();
            $table->double('max_score')->nullable()->index();
            $table->string('operator')->index();
            $table->double('points')->index();
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
        Schema::dropIfExists('activity_rules');
    }
};
