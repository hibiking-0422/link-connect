<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkTreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_tree', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('link_id');
            $table->unsignedBigInteger('tree_id');
            $table->integer('order');
            $table->timestamps();
            $table->unique(['link_id', 'tree_id']);

            //外部キー制約
            $table->foreign('link_id')
                ->references('id')
                ->on('links')
                ->onDelete('cascade');
            $table->foreign('tree_id')
                ->references('id')
                ->on('trees')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_tree');
    }
}
