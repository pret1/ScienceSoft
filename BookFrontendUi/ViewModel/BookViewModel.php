<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\CollectionFactory;

class BookViewModel implements ArgumentInterface
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    private BookRepositoryInterface $bookRepository;
    private RequestInterface $request;

    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        BookRepositoryInterface $bookRepository,
        RequestInterface $request
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->bookRepository = $bookRepository;
        $this->request = $request;
    }

    public function getOneBook(): BookInterface
    {
        $bookId = (int) $this->request->getParam('book_id');
        return $this->bookRepository->getById($bookId);
    }
    /**
     * @return Collection
     */
    public function getBookCollection(): Collection
    {
        return $this->collectionFactory->create();
    }
}
