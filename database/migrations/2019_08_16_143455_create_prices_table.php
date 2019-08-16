<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('item_id')->nullable();
            $table->bigInteger('item_group_id')->nullable();
            $table->double('selling_price');
            $table->string('selling_note');
            $table->integer('tax_id'); // This should reference a tax 
            $table->double('purchase_price');
            $table->string('purchase_note');
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
        Schema::dropIfExists('prices');
    }
}
