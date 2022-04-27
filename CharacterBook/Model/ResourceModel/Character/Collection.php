<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model\ResourceModel\Character;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ScienceSoft\CharacterBook\Model\CharacterModel;
use ScienceSoft\CharacterBook\Model\ResourceModel\CharacterResourceModel;

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
        $this->_init(CharacterModel::class, CharacterResourceModel::class);
    }
}
