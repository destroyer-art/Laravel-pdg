<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('availableps', function (Blueprint $table) {
            $table->id();
            $table->string('policy');
            $table->string('plan_reference');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('investment_house');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availableps');
    }
};
