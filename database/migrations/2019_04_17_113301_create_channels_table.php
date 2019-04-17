<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration 
{
	public function up()
	{
		Schema::create('channels', function(Blueprint $table) {
            $table->increments('id');
            $table->string('
name')->index()->comment('频道名称');
            $table->string('thumbnail')->nullable()->comment('缩略图');
            $table->integer('order')->unsigned()->default(0)->comment('排序');
            $table->integer('dept_id')->unsigned()->comment('部门ID');
            $table->boolean('rebellion')->unsigned()->default(false)->comment('投票ID');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('channels');
	}
}
