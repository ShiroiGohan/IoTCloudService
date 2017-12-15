<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationDataItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_data_items', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name');
            $table -> string('description');
            $table -> integer('application_id');
            $table -> foreign('application_id') -> references('id') -> on('applications');
            $table -> text('pattern_array');
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
        Schema::dropIfExists('application_data_items');
    }
}
