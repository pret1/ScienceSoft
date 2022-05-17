<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface CharacterSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \ScienceSoft\CharacterBook\Api\Data\CharacterInterface[]
     */
    public function getItems();

    /**
     * @param \ScienceSoft\CharacterBook\Api\Data\CharacterInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
