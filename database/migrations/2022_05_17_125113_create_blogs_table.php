<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');

            $table->string('title',255);
            $table->string('sort_desc',255);
            $table->string('slug',255)->unique();
            $table->text('long_desc',255)->nullable();
            $table->text('like_id')->nullable();
            $table->text('like_count')->default(0);
            $table->text('comment_count')->default(0);
            $table->text('meta_desc')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->string('image',255)->nullable();
             $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
