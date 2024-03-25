<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $comics_datas = config("comics");
    foreach ($comics_datas as $comic_datas) {

      $comic = new Comic;
      $comic->fill($comic_datas);
      $comic->save();
    }


  }
}
