<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('code',255)->nullable();
            $table->string('type',255)->nullable();
            $table->string('title',255)->nullable();
            $table->string('subtitle',255)->nullable();
            $table->longText('content')->nullable();
            $table->string('file',255)->nullable();
            $table->string('link',255)->nullable();
            $table->string('video',255)->nullable();
            $table->integer('slayd_check');
            $table->integer('view');
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
        Schema::dropIfExists('posts');
    }
}
