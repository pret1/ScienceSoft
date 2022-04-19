<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\CollectionFactory;

class BookFrontendUi extends Template
{
//    /**
//     * @return BookFrontendUi
//     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
//     */
//    public function _prepareLayout()
//    {
//        return parent::_prepareLayout();
//    }

//    /**
//     * @var CollectionFactory
//     */
//    private CollectionFactory $collectionFactory;
//
//    /**
//     * @param CollectionFactory $collectionFactory
//     */
//    public function __construct(
//        CollectionFactory $collectionFactory
//    ) {
//        $this->collectionFactory = $collectionFactory;
//    }
//    public function display()
//    {
//        $collection = $this->collectionFactory->create();
//        foreach ($collection as $item) {
//            echo "<pre>";
//            print_r($item->getData());
//            echo "</pre>";
//        }
//    }

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

    public function sayHello()
    {
        return __('Hello World');
    }
}

