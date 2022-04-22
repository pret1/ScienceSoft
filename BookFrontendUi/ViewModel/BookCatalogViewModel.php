<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\CollectionFactory;

class BookCatalogViewModel implements ArgumentInterface
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    private RequestInterface $request;

    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        RequestInterface  $request
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->request = $request;
    }

    public function getMyPost()
    {
        return $this->request->getParams();
    }

    /**
     * @return Collection
     */
    public function getBookCollection(): Collection
    {
        return $this->collectionFactory->create();
    }
}
