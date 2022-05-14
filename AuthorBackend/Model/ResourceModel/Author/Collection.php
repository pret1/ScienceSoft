<?php

declare(strict_types=1);

namespace ScienceSoft\AuthorBackend\Model\ResourceModel\Author;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ScienceSoft\AuthorBackend\Model\Author;
use ScienceSoft\AuthorBackend\Model\ResourceModel\AuthorResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected $_idFieldName = 'author_id';

    /**
     * Define resource model
     *
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(Author::class, AuthorResourceModel::class);
    }
}
