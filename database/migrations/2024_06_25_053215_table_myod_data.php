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
        Schema::create('myodData', function (Blueprint $table) {
            $table->string('endpoint', 100);
            $table->string('header', 100);
            $table->string('type', 15);

            $table->string('img_menu', 500);
            $table->string('decs', 700);

            $table->string('satu', 700);
            $table->string('dua', 700);
            $table->string('tiga', 700);
            $table->string('empat', 700);
            $table->string('lima', 700);
            $table->string('enjoy', 700);

        });  }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
