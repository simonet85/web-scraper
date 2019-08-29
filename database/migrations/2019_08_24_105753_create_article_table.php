<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title', 355);
			$table->text('excerpt')->nullable();
			$table->longText('content')->nullable();
			$table->string('image')->nullable();
			$table->string('source_link', 355)->nullable();
			$table->unsignedInteger('category_id')->nullable();
			$table->unsignedInteger('website_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
