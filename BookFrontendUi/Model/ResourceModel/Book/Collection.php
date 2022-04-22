<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Model\ResourceModel\Book;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ScienceSoft\BookFrontendUi\Model\Book as BookModel;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book as BookResource;

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
        $this->_init(BookModel::class, BookResource::class);
    }
}
