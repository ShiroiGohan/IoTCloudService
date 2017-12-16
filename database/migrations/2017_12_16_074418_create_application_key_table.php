<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_keys', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name');
            $table -> string('key');
            $table -> integer('usage');
            $table -> integer('application_id') -> unsigned();
            $table -> foreign('application_id') -> references('id') -> on('applications');
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
        Schema::dropIfExists('application_key');
    }
}
