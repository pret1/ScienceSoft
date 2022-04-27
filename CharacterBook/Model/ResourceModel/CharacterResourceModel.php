<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CharacterResourceModel extends AbstractDb
{
    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init('character', 'character_id');
    }
}
