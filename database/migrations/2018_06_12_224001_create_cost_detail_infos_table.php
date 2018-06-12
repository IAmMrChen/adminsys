<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostDetailInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_detail_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('cost_total', 8, 2)->comment('花费金额');
            $table->string('cost_type', 10)->comment('花费类型');
            $table->string('cost_location')->comment('花费位置');
            $table->text('remarks')->comment('备注');
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
        Schema::dropIfExists('cost_detail_infos');
    }
}
