<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface BookSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \ScienceSoft\BookFrontendUi\Api\Data\BookInterface[]
     */
    public function getItems();

    /**
     * @param \ScienceSoft\BookFrontendUi\Api\Data\BookInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
