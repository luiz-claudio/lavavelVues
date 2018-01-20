<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateControlImportsTable.
 */
class CreateControlImportsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('control_imports', function(Blueprint $table) {
            $table->increments('id');
            $table->string('filecsv')->nullable();
            $table->string('status')->default('waiting');


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
		Schema::drop('control_imports');
	}
}
