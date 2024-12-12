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
        Schema::create('profil', function (Blueprint $table) {
            $table->id(); // Field Autoincrement -Primary Key -integer
            $table->bigInteger('nim')->unique();
            $table->string('nama');
            $table->string('email');
            $table->enum('jurusan', ['TI', 'SI', 'AK']);
            $table->text('alamat');
            $table->timestamps(); // Field created_at dan updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
