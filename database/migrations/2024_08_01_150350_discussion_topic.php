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
        Schema::create('discussion_topic', function (Blueprint $table) {
            $table->id('disc_top_id')->auto_increment()->unsigned();
            $table->unsignedBigInteger('disc_id');
            $table->foreign('disc_id')->references('disc_id')->on('discussion_form')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('disc_title');
            $table->string('disc_desc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion_topic');
    }
};
