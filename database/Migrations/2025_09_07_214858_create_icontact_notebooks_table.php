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
    Schema::create('icontact__notebooks', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your fields...
      $table->string('system_name');
      $table->boolean('is_enable')->default(true);
      $table->boolean('is_public')->default(false);
      $table->string('entity_type')->nullable();
      $table->integer('entity_id')->nullable();
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
    Schema::dropIfExists('icontact__notebooks');
  }
};
