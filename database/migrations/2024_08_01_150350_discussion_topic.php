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
            $table->id('disc_id')->auto_increment()->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('field_id');
            $table->foreign('field_id')->references('field_id')->on('field_work')
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
