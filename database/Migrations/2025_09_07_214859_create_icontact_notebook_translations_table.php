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
    Schema::create('icontact__notebook_translations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your translatable fields
      $table->string('title');
      $table->integer('notebook_id')->unsigned();
      $table->string('locale')->index();
      $table->unique(['notebook_id', 'locale']);
      $table->foreign('notebook_id')->references('id')->on('icontact__notebooks')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('icontact__notebook_translations', function (Blueprint $table) {
      $table->dropForeign(['notebook_id']);
    });
    Schema::dropIfExists('icontact__notebook_translations');
  }
};
