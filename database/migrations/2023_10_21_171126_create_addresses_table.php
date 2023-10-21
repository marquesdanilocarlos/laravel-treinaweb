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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string("address");
            $table->string("number", 20);
            $table->string("neighborhood", 50);
            $table->string("city", 50);
            $table->string("complement", 50)->nullable();
            $table->char("zipcode", 8);
            $table->char("state", 2);
            $table->unsignedBigInteger("employee_id");
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
