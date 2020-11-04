<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {
            $table->foreignId("author_id")->constrained();
            $table->string("nationality", 50);
            $table->text("biography")->nullable();
            $table->string("image")->default("https://structures.civil.ualberta.ca/wp-content/uploads/2015/05/Unknown-person.gif");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors_info');
    }
}
