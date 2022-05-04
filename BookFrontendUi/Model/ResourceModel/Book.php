<?php

namespace ScienceSoft\BookFrontendUi\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Book extends AbstractDb
{
    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init('book', 'id');
    }
}
