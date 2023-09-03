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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('price');
            $table->string('image');
            $table->string('location');
            $table->date('start');
            $table->date('end');
            $table->string('time');
            $table->integer('categore_id')->unsigned();
            $table->string('Target_group');
            // $table->tinyInteger('status')->default('0')->comment('1=hidden,0=visible');
            $table->timestamps();
            $table->foreign('categore_id')->references('id')->on('categores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
