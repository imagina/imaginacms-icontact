<?php

namespace Modules\Icontact\Relations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Icontact\Models\Item;

class ContactItemsRelation
{
  public function resolve(Model $model): MorphMany
  {
    return $model->morphMany(Item::class, 'entity')->where('is_enable', 1);
  }
}
