<?php

declare(strict_types=1);

namespace ScienceSoft\UserModule\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use ScienceSoft\UserModule\Model\ResourceModel\Post\CollectionFactory;

class Index implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private PageFactory $pageFactory;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @param PageFactory $pageFactory
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        PageFactory       $pageFactory,
        CollectionFactory $collectionFactory
    )
    {
        $this->pageFactory = $pageFactory;
        $this->collectionFactory = $collectionFactory;
    }

    public function execute()
    {
        $collection = $this->collectionFactory->create();
        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }

        return $this->pageFactory->create();
    }
}
