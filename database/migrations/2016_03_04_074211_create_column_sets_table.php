<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('column_sets', function (Blueprint $table) {
            $table->string('column_setID');
            $table->string('block_rowID');
            $table->string('field_setID');
            $table->string('dependencyID');
            $table->string('col_span');
            $table->softDeletes();   
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
         Schema::drop('column_sets');
    }
}
