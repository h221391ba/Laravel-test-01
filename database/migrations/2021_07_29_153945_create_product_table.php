<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedInteger('product_category_id');
            $table->unsignedInteger('product_brand_id');
            $table->string('intro', 1000);
            $table->timestamps('create_at');
            $table->timestamps('update_at');
            $table->timestamps('delete_at');
            $table->string('create_by');
            $table->string('update_by');
            $table->string('delete_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
