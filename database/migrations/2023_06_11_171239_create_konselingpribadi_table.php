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
        Schema::create('konselingpribadi', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('jeniskonseling_id')->require();
            $table->foreign('jeniskonseling_id')->references('id')->on('jeniskonseling')->onDelete('restrict');
            $table->unsignedbiginteger('siswa_id')->require();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('restrict');
            $table->unsignedbiginteger('gurubk_id')->require();
            $table->foreign('gurubk_id')->references('id')->on('gurubk')->onDelete('restrict');
            $table->unsignedbiginteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');
            $table->enum('status', ['waiting','approved','done', 'rejected','canceled']);
            $table->dateTime('tanggal');
            $table->string('hasil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konselingpribadi', function (Blueprint $table) {
            $table->dropForeign(['jeniskonseling_id']);
            $table->dropColumn('jeniskonseling_id');
            $table->dropForeign(['siswa_id']);
            $table->dropColumn('siswa_id');
            $table->dropForeign(['gurubk_id']);
            $table->dropColumn('gurubk_id');
            $table->dropForeign(['walas_id']);
            $table->dropColumn('walas_id');
        });
        Schema::dropIfExists('konselingpribadi');
    }
};
