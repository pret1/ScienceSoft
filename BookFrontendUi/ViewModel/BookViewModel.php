<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\CollectionFactory;

class BookViewModel implements ArgumentInterface
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    public function getSomething()
    {
        return "Hello World";
    }

    /**
     * @return Collection
     */
    public function getBookCollection(): Collection
    {
        return $this->collectionFactory->create();
    }
}
