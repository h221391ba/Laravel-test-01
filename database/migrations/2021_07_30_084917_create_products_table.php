<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();

                $table->integer('product_category_id')->unsigned()->comment('分類ID');
                $table->integer('product_brand_id')->unsigned()->comment('品牌ID');
                $table->string('name', 100)->comment('商品名稱');
                $table->text('intro')->nullable()->comment('商品介紹');

                $table->integer('create_by')->unsigned()->default(0);
                $table->integer('update_by')->unsigned()->default(0);
                $table->integer('delete_by')->unsigned()->default(0);

                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
