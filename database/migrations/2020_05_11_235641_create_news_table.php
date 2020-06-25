<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('title');
            $table->longText('body');
            $table->string('author');
            $table->string('source');
            $table->uuid('category_id')->nullable();
            $table->timestamps();
        });
        Schema::table('news', function($table){
            $table->foreign('category_id')->references('uuid')->on('categories')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function($table)
        {
            $table->dropForeign(['news_category_id_foreign']);
        });
            Schema::dropIfExists('news');
        }
}
