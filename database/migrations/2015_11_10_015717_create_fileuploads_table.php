<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileuploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fileuploads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('imagem',255);
			$table->String('filename',100);
			$table->boolean('ativo');
			$table->String('categoria',100);
			$table->text('descricao');
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
		Schema::drop('fileuploads');
	}

}
