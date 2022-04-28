<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model\ResourceModel\Character;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ScienceSoft\CharacterBook\Model\ResourceModel\CharacterResourceModel;
use ScienceSoft\CharacterBook\Model\Character;

class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected $_idFieldName = 'character_id';

    /**
     * Define resource model
     *
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(Character::class, CharacterResourceModel::class);
    }
}
