<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\CollectionFactory;

class BookViewModel implements ArgumentInterface
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @var BookRepositoryInterface
     */
    private BookRepositoryInterface $bookRepository;

    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    public function __construct(
        CollectionFactory $collectionFactory,
        BookRepositoryInterface $bookRepository,
        RequestInterface $request
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->bookRepository = $bookRepository;
        $this->request = $request;
    }

    /**
     * @return BookInterface
     */
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
