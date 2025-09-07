<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('icontact__item_translations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your translatable fields
      $table->string('title');
      $table->string('value');
      $table->string('message')->nullable();

      $table->integer('item_id')->unsigned();
      $table->string('locale')->index();
      $table->unique(['item_id', 'locale']);
      $table->foreign('item_id')->references('id')->on('icontact__items')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('icontact__item_translations', function (Blueprint $table) {
      $table->dropForeign(['item_id']);
    });
    Schema::dropIfExists('icontact__item_translations');
  }
};
