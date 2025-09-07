<?php

namespace Modules\Icontact\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTranslation extends Model
{
  public $timestamps = false;
  protected $fillable = [
    'title',
    'value',
    'message'
  ];
  protected $table = 'icontact__item_translations';
}
