<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' => 'John Faker',
            'email' => 'fake-john@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'name' => 'Jane Faker',
            'email' => 'fake-jane@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::truncate();
    }
}
