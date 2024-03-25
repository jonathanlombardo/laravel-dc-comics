<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  use HasFactory;
  protected $fillable = [
    "title",
    "description",
    "thumb",
    "price",
    "series",
    "sale_date",
    "type",
  ];

  public function getPrice()
  {
    return "$this->price $";
  }

  public function getDate()
  {
    $dt = Carbon::createFromFormat('Y-m-d', $this->sale_date)->toArray();
    return "{$dt['day']}/{$dt['month']}/{$dt['year']}";
  }


}
