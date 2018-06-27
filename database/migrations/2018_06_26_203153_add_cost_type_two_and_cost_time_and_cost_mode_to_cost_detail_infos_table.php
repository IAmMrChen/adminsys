<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCostTypeTwoAndCostTimeAndCostModeToCostDetailInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cost_detail_infos', function (Blueprint $table) {
            $table->string('cost_type_two', 4)->content('消费类型二级');
            $table->string('cost_time', 20)->content('消费时间');
            $table->string('cost_mode', 4)->content('付款方式');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cost_detail_infos', function (Blueprint $table) {
            $table->string('cost_type_two', 4);
            $table->string('cost_time', 20);
            $table->string('cost_mode', 4);
        });
    }
}
