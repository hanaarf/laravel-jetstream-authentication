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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedbiginteger('gurubk_id')->require();
            $table->foreign('gurubk_id')->references('id')->on('gurubk')->onDelete('restrict');
            $table->unsignedbiginteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropForeign(['gurubk_id']);
            $table->dropColumn('gurubk_id');
            $table->dropForeign(['walas_id']);
            $table->dropColumn('walas_id');
        });
        Schema::dropIfExists('kelas');
    }
};
