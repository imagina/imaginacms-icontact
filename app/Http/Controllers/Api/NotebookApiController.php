<?php

namespace Modules\Icontact\Http\Controllers\Api;

use Imagina\Icore\Http\Controllers\CoreApiController;
//Model
use Modules\Icontact\Models\Notebook;
use Modules\Icontact\Repositories\NotebookRepository;

class NotebookApiController extends CoreApiController
{
  public function __construct(Notebook $model, NotebookRepository $modelRepository)
  {
    parent::__construct($model, $modelRepository);
  }
}
