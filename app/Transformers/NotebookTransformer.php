<?php

namespace Modules\Icontact\Transformers;

use Imagina\Icore\Transformers\CoreResource;

class NotebookTransformer extends CoreResource
{
  /**
   * Attribute to exclude relations from transformed data
   * @var array
   */
  protected array $excludeRelations = [];

  /**
  * Method to merge values with response
  *
  * @return array
  */
  public function modelAttributes($request): array
  {
    return [];
  }
}
