<?php

declare(strict_types=1);

namespace ScienceSoft\AuthorBackend\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AuthorResourceModel extends AbstractDb
{
    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init('author', 'author_id');
    }
}
