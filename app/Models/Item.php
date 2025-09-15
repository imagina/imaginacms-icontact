<?php

namespace Modules\Icontact\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Imagina\Icore\Models\CoreModel;

class Item extends CoreModel
{
  use Translatable;

  protected $table = 'icontact__items';
  public string $transformer = 'Modules\Icontact\Transformers\ItemTransformer';
  public string $repository = 'Modules\Icontact\Repositories\ItemRepository';
  public array $requestValidation = [
    'create' => 'Modules\Icontact\Http\Requests\CreateItemRequest',
    'update' => 'Modules\Icontact\Http\Requests\UpdateItemRequest',
  ];
  //Instance external/internal events to dispatch with extraData
  public array $dispatchesEventsWithBindings = [
    //eg. ['path' => 'path/module/event', 'extraData' => [/*...optional*/]]
    'created' => [],
    'creating' => [],
    'updated' => [],
    'updating' => [],
    'deleting' => [],
    'deleted' => []
  ];
  public array $translatedAttributes = [
    'title',
    'value',
    'message'
  ];
  protected $fillable = [
    'system_name',
    'is_enable',
    'entity_type',
    'entity_id',
    'type_id',
    'country_code',
    'notebook_id'
  ];

  protected $appends = [
    'type'
  ];

  public function type(): Attribute
  {
    return Attribute::get(function () {
      $typeModel = new ItemType();
      return $typeModel->show($this->type_id);
    });
  }
}
