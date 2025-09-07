<?php

namespace Modules\Icontact\Repositories\Cache;

use Modules\Icontact\Repositories\NotebookRepository;
use Imagina\Icore\Repositories\Cache\CoreCacheDecorator;

class CacheNotebookDecorator extends CoreCacheDecorator implements NotebookRepository
{
    public function __construct(NotebookRepository $notebook)
    {
        parent::__construct();
        $this->entityName = 'icontact.notebooks';
        $this->repository = $notebook;
    }
}
