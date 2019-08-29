<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('url');
			$table->string('main_filter_selector'); // This is the main filter selector used in the main filter() function
			$table->unsignedInteger('website_id')->nullable();
			$table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('item_schema_id')->nullable();
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
        Schema::dropIfExists('links');
    }
}
