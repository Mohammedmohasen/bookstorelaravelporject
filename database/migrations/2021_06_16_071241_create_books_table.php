<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *name : the book name
     *authorid the author id of this bok and we can to do any thing in the author and we see its forgin key
     *publishingid also tihs for get publish inforrmation and this its forgin key
     *relaseyear The year of the book's release
     *isbn its International Standard Book Number
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name');
            $table->string('isbn')->unique();
            $table->Integer('releaseYear');
            $table->timestamps();
            $table->foreignId('authorId')->constrained('authors');
            $table->foreignId('categoriesId')->constrained('categories');
            $table->foreignId('publishingHousesId')->constrained('publishing-houses');
            $table->softDeletes();
        });
        /*
    Schema::create('books', function (Blueprint $table) {

    $table->foreign('publishingID')
    ->references('id')->on('publishing-houses')
    ->onDelete('cascade');
    $table->foreign('categoriesID')
    ->references('id')->on('categories')
    ->onDelete('cascade');

    });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
