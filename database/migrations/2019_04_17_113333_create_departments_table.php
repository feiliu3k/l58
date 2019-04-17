<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration 
{
	public function up()
	{
		Schema::create('departments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('
name')->index()->unique()->comment('部门名称');
            $table->integer('order')->unsigned()->default(0)->comment('排序');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('departments');
	}
}
