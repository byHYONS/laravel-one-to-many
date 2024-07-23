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
        Schema::table('projects', function (Blueprint $table) {
            //? creo il coampo dopo l'id e con la possibilità di essere null:
            $table->unsignedBigInteger('types_id')->nullable()->after('id');

            //? creo la chiave esterna con la relazione = set null:
            $table->foreign('types_id')
                ->references('id')
                ->on('types')
                ->nullOnDelete(); // set null


        //* forma abbreviata:
        //* $table->foreignId('types_id')->constrained();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
};
