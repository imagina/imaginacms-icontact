<?php

namespace Modules\Icontact\Http\Controllers\Api;

use Imagina\Icore\Http\Controllers\CoreApiController;
//Model
use Modules\Icontact\Models\Item;
use Modules\Icontact\Repositories\ItemRepository;

class ItemApiController extends CoreApiController
{
  public function __construct(Item $model, ItemRepository $modelRepository)
  {
    parent::__construct($model, $modelRepository);
  }
}
