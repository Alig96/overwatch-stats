<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlizzardUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blizzard_users', function (Blueprint $table) {
            $table->increments('id');

            //User Information
            $table->string('battletag');
            $table->enum('region', ['eu', 'us', 'kr']);
            //User Data
            $table->text('quickplay');
            $table->text('competitive');

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
        Schema::dropIfExists('blizzard_users');
    }
}
