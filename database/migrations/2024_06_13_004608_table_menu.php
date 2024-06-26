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
        Schema::create('menu', function (Blueprint $table) {
            $table->integerIncrements('id')->primary();
            $table->string('img_menu', 500);
            $table->string('decs', 700);
            $table->string('header', 100);
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
