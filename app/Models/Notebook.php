<?php

namespace Modules\Icontact\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Imagina\Icore\Models\CoreModel;

class Notebook extends CoreModel
{
  use Translatable;

  protected $table = 'icontact__notebooks';
  public string $transformer = 'Modules\Icontact\Transformers\NotebookTransformer';
  public string $repository = 'Modules\Icontact\Repositories\NotebookRepository';
  public array $requestValidation = [
    'create' => 'Modules\Icontact\Http\Requests\CreateNotebookRequest',
    'update' => 'Modules\Icontact\Http\Requests\UpdateNotebookRequest',
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
  public array $translatedAttributes = ['title'];
  protected $fillable = [
    'system_name', 'is_enable', 'is_public', 'entity_type', 'entity_id'
  ];

  public function items(): HasMany
  {
    return $this->hasMany(Item::class, 'notebook_id');
  }
}
