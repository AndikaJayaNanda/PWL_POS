<?php

use App\Models\m_level;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Pengerjaan Praktikum 2.2 bagian 3
    // public function up(): void
    // {
    //     Schema::create('m_user', function (Blueprint $table) {
    //         $table->id('user_id');
    //         $table->unsignedBigInteger('level_id')->index();
    //         $table->string('username', 20);
    //         $table->string('nama', 100);
    //         $table->string('password');
    //         $table->timestamps();

    //         // mendefinisikan foreign key pada kolom level_id dengan referensi pada kolom level_id pada tabel m_level.
    //         $table->foreign('level_id')->references('level_id')->on('m_level');
    //     });
    // }

    // JS 6 D bagian 4
    public function up(): void
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('level_id')->index();
            $table->string('username', 20)->unique();
            $table->string('nama', 100);
            $table->string('password');
            $table->timestamps();

            $table->foreign('level_id')->references('level_id')->on('m_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};