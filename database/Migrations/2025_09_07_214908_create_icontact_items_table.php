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
      $table->boolean('is_enable')->default(true);
      $table->string('entity_type')->default('__global__');
      $table->integer('entity_id')->default(0);
      $table->tinyInteger('type_id')->default(0)->unsigned();
      $table->string('country_code')->nullable();;
      $table->unique(['system_name', 'entity_type', 'entity_id']);
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
