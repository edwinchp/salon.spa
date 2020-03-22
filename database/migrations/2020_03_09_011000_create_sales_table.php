<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('service_1')->nullable();
            $table->string('service_2')->nullable();
            $table->string('service_3')->nullable();
            $table->string('service_4')->nullable();
            $table->string('service_5')->nullable();
            $table->double('price_1')->nullable()->default(0);
            $table->double('price_2')->nullable()->default(0);
            $table->double('price_3')->nullable()->default(0);
            $table->double('price_4')->nullable()->default(0);
            $table->double('price_5')->nullable()->default(0);
            $table->string('service_extra')->nullable();
            $table->double('price_extra')->nullable()->default(0);
            $table->double('total')->nullable()->default(0);
            $table->double('payment')->nullable()->default(0);
            $table->double('change')->nullable()->default(0);
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
        Schema::dropIfExists('sales');
    }
}
