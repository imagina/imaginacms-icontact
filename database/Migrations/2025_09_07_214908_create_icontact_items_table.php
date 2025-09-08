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
    Schema::create('icontact__items', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your fields...
      $table->string('system_name');
      $table->tinyInteger('type_id')->default(0)->unsigned();
      $table->boolean('is_enable')->default(true);
      $table->string('country_code')->nullable();;
      $table->integer('notebook_id')->unsigned();
      $table->foreign('notebook_id')->references('id')->on('icontact__notebooks')->onDelete('cascade');
      $table->unique(['system_name', 'notebook_id', 'type_id']);
      // Audit fields
      $table->timestamps();
      $table->auditStamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('icontact__items');
  }
};
