<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBestCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('best_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100)->nullable();
            $table->text('description')->nullable();
            $table->string('producer',100)->nullable();
            $table->string('banner',255)->nullable();
            $table->string('price',100)->nullable();
            $table->string('duration',100)->nullable();
            $table->integer('videoCount')->nullable()->default(0);
            $table->integer('views')->nullable()->default(0);
            $table->integer('question&answer')->nullable()->default(0);
            $table->string('tag',100)->nullable();
            $table->string('publishDate',100)->nullable();
            $table->string('producer_img',255)->nullable();
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
        Schema::dropIfExists('best_courses');
    }
}
