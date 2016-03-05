<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_rows', function (Blueprint $table) {
            $table->string('block_rowID');
            $table->string('blockID');
            $table->string('dependencyID');
            $table->string('type');
            $table->string('name');
            $table->integer('orientation');
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
         Schema::drop('block_rows');
    }
}
