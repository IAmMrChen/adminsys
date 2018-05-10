<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password', 18);
            $table->string('name', 50)->unique()->comment('用户名');
            $table->string('email', 50)->unique()->comment('邮箱地址');
            $table->integer('gender')->comment('性别');
            $table->string('avatar')->comment('头像');
            $table->string('address')->comment('居住地');
            $table->string('industry', 100)->comment('所在行业');
            $table->text('introduction')->comment('个人简介');
            $table->integer('article_count')->comment('文章数')->default(0);
            $table->integer('follower_count')->comment('关注数')->default(0);
            $table->integer('followed_count')->comment('被关注数')->default(0);
            $table->integer('issue_count')->comment('提问数')->default(0);
            $table->integer('answer_count')->comment('回答数')->default(0);
            $table->integer('special_column_count')->comment('专栏数')->default(0);
            $table->integer('agreed_count')->comment('赞同数')->default(0);
            $table->integer('favorite_count')->comment('收藏数')->default(0);
            $table->integer('favorited_count')->comment('被收藏数')->default(0);
            $table->string('confirm_token', 50)->comment('邮箱激活验证码');
            $table->smallInteger('is_active')->comment('是否激活')->default(0);
            $table->json('settings')->nullable();
            $table->softDeletes()->comment('软删除');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
