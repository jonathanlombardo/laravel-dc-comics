<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('comics', function (Blueprint $table) {
      $table->id();
      $table->tinyText("title");
      $table->string("description")->nullable();
      $table->tinyText("thumb")->nullable();
      $table->decimal("price", 8, 2);
      $table->tinyText("series");
      $table->date("sale_date")->nullable();
      $table->tinyText("type");
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
    Schema::dropIfExists('comics');
  }
};
