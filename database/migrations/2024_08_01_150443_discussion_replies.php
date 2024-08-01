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
        Schema::create('discussion_replies', function (Blueprint $table) {
            $table->id('disc_rep_id')->auto_increment()->unsigned();
            $table->unsignedBigInteger('disc_top_id');
            $table->foreign('disc_top_id')->references('disc_top_id')->on('discussion_topic')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('disc_reply');
            $table->string('helping_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion_replies');
    }
};
