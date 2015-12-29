<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $user = new User;
        $user->id = 1;
        $user->name ='Fahad Satti';
        $user->email ='fahad.satti@seecs.edu.pk';
        $user->password ='$2y$10$Fh0VPSDdRSP6.sSYQj5nB.L0ZpSUnhpJPVZd7IIM05wjzwKf1LMFG';
        $user->role ='Moderator';
        $user->save();


        Schema::create('codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('user_id');
            $table->string('code');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('codes');
    }
}
