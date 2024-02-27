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
        Schema::create('doanhnghiep', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('doanhnghiep_loaihinh_id');
            $table->string('tentiengviet');
            $table->string('tentienganh');
            $table->string('tenviettat');
            $table->string('diachi');
            $table->string('mathue');
            $table->string('fax');
            $table->integer('soluongnhansu');
            $table->date('ngaylap');
            $table->string('mota');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
