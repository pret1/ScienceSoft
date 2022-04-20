<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ScienceSoft\BookFrontendUi\Model\Post as PostModel;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(PostModel::class, PostResource::class);
    }
}
