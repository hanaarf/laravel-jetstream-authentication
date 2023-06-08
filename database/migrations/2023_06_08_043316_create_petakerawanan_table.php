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
        Schema::create('petakerawanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('siswa_id')->require();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('restrict');
            $table->unsignedbiginteger('siswa_id')->require();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('restrict');
            $table->unsignedbiginteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');
            $table->string('kesimpulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petakerawanan');
    }
};
