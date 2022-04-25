<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\CollectionFactory;
use ScienceSoft\BookFrontendUi\ViewModel\BookOneViewModel;

class BookFrontendUi extends Template
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @param Context $context
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Context           $context,
        CollectionFactory $collectionFactory
    ) {
        parent::__construct($context);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return Collection
     */
    public function getBookCollection(): Collection
    {
        return $this->collectionFactory->create();
    }
}
