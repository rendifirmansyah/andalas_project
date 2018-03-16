<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp');
            $table->string('alamat');
            $table->integer('role_id');
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table('users')->insert(
            array(                
                'name' => 'Admin',
                'email' => 'admin@andalas.com',
                'password' => bcrypt('andalasmedia'),  
                'no_telp' => '021213123',
                'alamat' => 'Test',
                'role_id' => '2',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
