<?php

use App\Models\Empresa;
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
        Schema::create('valvulas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Empresa::class)->constrained()->onDelete('cascade');
            $table->string('marca');
            $table->string('modelo');
            $table->string('n_de_serie')->unique();
            $table->string('diametro');
            $table->enum('tipo_valvula', ['resorte', 'piloto']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valvulas');
    }
};
