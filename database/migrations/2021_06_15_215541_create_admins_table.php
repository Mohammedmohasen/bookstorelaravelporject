<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *name this field its also used for login or the email
     *email the admin emails we also use on fake admin in the system and the system auto geranted it we created it in seeder 
     *password we do not use hash or password type or function if we has a more time to do this function more secure we do it 
     *this table and model do not has any relationship wih any another table its seprated table 
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('emial');
            $table->string('password');
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
        Schema::dropIfExists('admins');
    }
}
