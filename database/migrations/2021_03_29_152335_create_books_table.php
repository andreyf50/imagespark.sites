<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Создаём таблицу авторов
        Schema::create('books_authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('raiting');
            $table->timestamps();
        });
        // Создаём таблицу книг
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->integer('raiting');
            $table->integer('author_id')->references('id')->on('books_authors')->onDelete('RESTRICT');
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
        Schema::dropIfExists('books');
        Schema::dropIfExists('books_genres');
        Schema::dropIfExists('books_authors');
    }
}
