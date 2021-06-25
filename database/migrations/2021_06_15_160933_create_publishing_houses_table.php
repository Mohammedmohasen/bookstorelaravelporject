<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishingHousesTable extends Migration
{
    /**
     * Run the migrations.
     *publishingHouseName:the name of the org and this field can changed by admin if he want
     *sitename if he do not has any site we make it null but we try to fix this problem as set any bookshop site
     *booknumber all book number in this org
     *suggested col:booktype is any one need to see all action book in this org
     *suggested col:emial if we need to conrtact with this org and his email its important for verfication
     * @return void
     */
    public function up()
    {
        Schema::create('publishing_houses', function (Blueprint $table) {
            $table->id();
            $table->string('publishingHouseName')->unique();;
            $table->string('siteName');
            $table->integer('bookNumber');
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
        Schema::dropIfExists('publishing-houses');
    }
}
