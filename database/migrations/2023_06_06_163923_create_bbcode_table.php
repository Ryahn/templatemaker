<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbcode', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->text('bbcode');
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
        Schema::table('bbcode', function (Blueprint $table) {
            $table->dropForeign('template_id');
        });
        Schema::dropIfExists('bbcode');
    }
}
