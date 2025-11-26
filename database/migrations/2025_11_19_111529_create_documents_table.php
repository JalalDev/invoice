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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('ref');
            $table->date('date_document');
            $table->date('date_echeance')->nullable();
            $table->double('total_ht', 14, 2)->default(0);
            $table->double('total_tva', 14, 2)->default(0);
            $table->double('total_ttc', 14, 2)->default(0);
            $table->integer('client_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
