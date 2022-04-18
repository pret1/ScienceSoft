<?php

declare(strict_types=1);

namespace ScienceSoft\UserModule\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'book';

    protected $_cacheTag = 'book';

    protected $_eventPrefix = 'book';

    protected function _construct()
    {
        $this->_init('ScienceSoft\UserModule\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
