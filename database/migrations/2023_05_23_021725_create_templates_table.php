<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('game_name')->nullable();
            $table->string('devName')->nullable();
            $table->string('version')->nullable();
            $table->longText('overview')->nullable();
            $table->string('thread_updated')->nullable();
            $table->string('release_date')->nullable();
            $table->string('censorship')->nullable();
            $table->text('langauge')->nullable();
            $table->text('genre')->nullable();
            $table->text('osSys')->nullable();
            $table->text('voiced')->nullable();
            $table->string('prequel')->nullable();
            $table->string('sequel')->nullable();
            $table->string('userThanks')->nullable();
            $table->string('vndb')->nullable();
            $table->string('resolution')->nullable();
            $table->longText('content')->nullable();
            $table->string('pages')->nullable();
            $table->string('originalTitle')->nullable();
            $table->string('length')->nullable();
            $table->string('linkAsset')->nullable();
            $table->text('compatible')->nullable();
            $table->longText('installation')->nullable();
            $table->longText('changelog')->nullable();
            $table->longText('devNotes')->nullable();
            $table->longText('contentList')->nullable();
            $table->longText('included')->nullable();
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
        Schema::dropIfExists('templates');
    }
}
