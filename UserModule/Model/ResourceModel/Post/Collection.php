<?php

declare(strict_types=1);

namespace ScienceSoft\UserModule\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'book_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ScienceSoft\UserModule\Model\Post', 'ScienceSoft\UserModule\Model\ResourceModel\Post');
    }
}
