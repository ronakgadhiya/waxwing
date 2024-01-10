<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_inquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id')->nullable()->default(0);
             $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('mobile',20)->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('product_inquiries');
    }
}
