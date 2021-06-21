<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *this migration its take aboute the aither detailsn and the details 
     *name:authorName
     *email:authoremail 
     *book if the admin add the new book for the aithor his number of book add one just a number 
     *state if he die or retire from write book his state false or true so no one can add to him any new book 
     *age the author age 
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('author');
            $table->string('email');
            $table->integer('BookBNumber');
            $table->integer('age');
            $table->boolean('state');
            $table->timestamps();
            $table->softDeletes();
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
