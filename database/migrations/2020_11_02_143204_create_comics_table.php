<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 50);
            $table->string("original_title", 50)->nullable();
            $table->string("author", 50);
            $table->year("year");
            $table->smallInteger("issue");
            $table->float("price", 5, 2);
            $table->boolean("color")->default(false);
            $table->enum('reading', ['western', 'eastern'])->default("western");
            $table->string("cover")->default("https://via.placeholder.com/300x420");
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
        Schema::dropIfExists('comics');
    }
}
