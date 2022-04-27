<?php

namespace ScienceSoft\CharacterBook\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use ScienceSoft\CharacterBook\Model\ResourceModel\CharacterResourceModel;

class CharacterModel extends AbstractModel implements IdentityInterface
{
    /**
     * @var string
     */
    const CACHE_TAG = "character";

    /**
     * @return string[]
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(CharacterResourceModel::class);
    }
}
