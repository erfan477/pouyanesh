<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100)->nullable();
            $table->text('description')->nullable();
            $table->string('producer',100)->nullable();
            $table->string('banner',255)->nullable();
            $table->string('tag',100)->nullable();
            $table->string('publishDate',100)->nullable();
            $table->integer('views')->nullable()->default(0);
            $table->integer('comments')->nullable()->default(0);
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
        Schema::dropIfExists('statements');
    }
}
