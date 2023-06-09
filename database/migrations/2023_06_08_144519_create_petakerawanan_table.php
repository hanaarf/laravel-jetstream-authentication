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
            $table->unsignedbiginteger('jenisrawan_id')->require();
            $table->foreign('jenisrawan_id')->references('id')->on('jenisrawan')->onDelete('restrict');
            $table->unsignedbiginteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');
            $table->unsignedbiginteger('siswa_id')->require();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('restrict');
            $table->string('kesimpulan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('petakerawanan', function (Blueprint $table) {
            $table->dropForeign(['jenisrawan_id']);
            $table->dropColumn('jenisrawan_id');
            $table->dropForeign(['walas_id']);
            $table->dropColumn('walas_id');
            $table->dropForeign(['siswa_id']);
            $table->dropColumn('siswa_id');
        });
        Schema::dropIfExists('petakerawanan');
    }
};
