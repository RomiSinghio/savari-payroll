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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('week_id')->nullable();
            $table->foreignId('driver_id')->nullable();
            $table->integer('monday_hours')->nullable();
            $table->integer('monday_cleaning')->nullable();
            $table->integer('tuesday_hours')->nullable();
            $table->integer('tuesday_cleaning')->nullable();
            $table->integer('wednesday_hours')->nullable();
            $table->integer('wednesday_cleaning')->nullable();
            $table->integer('thursday_hours')->nullable();
            $table->integer('thursday_cleaning')->nullable();
            $table->integer('friday_hours')->nullable();
            $table->integer('friday_cleaning')->nullable();
            $table->integer('saturday_hours')->nullable();
            $table->integer('saturday_cleaning')->nullable();
            $table->integer('sunday_hours')->nullable();
            $table->integer('sunday_cleaning')->nullable();
            $table->integer('food_allowance')->nullable();
            $table->integer('fuel_allowance')->nullable();
            $table->integer('total_hours')->nullable();
            $table->integer('net_pay')->nullable();
            $table->string('payslip')->nullable();
            $table->integer('deductions')->nullable();
            $table->integer('expenses')->nullable();
            $table->integer('actual_pay')->nullable();
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
        Schema::dropIfExists('reports');
    }
};
