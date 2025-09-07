<?php

namespace Modules\Icontact\Repositories\Cache;

use Modules\Icontact\Repositories\ItemRepository;
use Imagina\Icore\Repositories\Cache\CoreCacheDecorator;

class CacheItemDecorator extends CoreCacheDecorator implements ItemRepository
{
    public function __construct(ItemRepository $item)
    {
        parent::__construct();
        $this->entityName = 'icontact.items';
        $this->repository = $item;
    }
}
