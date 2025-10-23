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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('company_name');
            $table->string('contact_person');
            $table->string('email');
           $table->string('phone');
           $table->text('address')->nullable;
           $table->string('title');
           $table->longtext('executive_summary');
           $table->date('start_date');
           $table->date('end_date');
           $table->string('logo_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
