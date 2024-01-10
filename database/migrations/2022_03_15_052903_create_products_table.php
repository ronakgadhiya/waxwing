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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->nullable()->default(0);
            $table->foreign('product_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->string('name',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->string('img',100)->nullable();
            $table->text('desc')->nullable();
            $table->text('meta_tag')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            $table->boolean('status')->nullable()->default(1);
            $table->bigInteger('delete_by')->default(0);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
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
        Schema::dropIfExists('products');
    }
}
