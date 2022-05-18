<?php

namespace ScienceSoft\BookFrontendUi\Model;

use ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterfaceFactory;
use ScienceSoft\BookFrontendUi\Api\Data\BookSearchResultInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookSearchResultInterfaceFactory;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\CollectionFactory as BookCollectionFactory;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book as BookResource;
use ScienceSoft\BookFrontendUi\NoSuchEntityException;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

class BookRepository implements BookRepositoryInterface
{
    /**
     * @var BookInterfaceFactory
     */
    private BookInterfaceFactory $bookFactory;

    /**
     * @var BookResource
     */
    private BookResource $bookResource;

    private BookCollectionFactory $collectionFactory;

    private CollectionProcessorInterface $collectionProcessor;

    private BookSearchResultInterfaceFactory $bookSearchResultInterfaceFactory;

    public function __construct(
        BookInterfaceFactory $bookFactory,
        BookResource $bookResource,
        BookCollectionFactory $collectionFactory,
        CollectionProcessorInterface $collectionProcessor,
        BookSearchResultInterfaceFactory $bookSearchResultInterfaceFactory
    ) {
        $this->bookFactory = $bookFactory;
        $this->bookResource = $bookResource;
        $this->collectionFactory = $collectionFactory;
        $this->collectionProcessor = $collectionProcessor;
        $this->bookSearchResultInterfaceFactory = $bookSearchResultInterfaceFactory;
    }

    /**
     * @param $id
     * @return BookInterface
     * @throws NoSuchEntityException
     */
    public function getById($id): BookInterface
    {
        $book = $this->bookFactory->create();
        $this->bookResource->load($book, $id);
        if (!$book->getId()) {
            throw new NoSuchEntityException(__('Unable to find book with ID "%1"', $id));
        }
        return $book;
    }

    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);
        $searchResults = $this->bookSearchResultInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * @param BookInterface $book
     * @return BookInterface
     */
    public function save(BookInterface $book): BookInterface
    {
        $this->bookResource->save($book);
        return $book;
    }

    /**
     * @param BookInterface $book
     * @return bool
     */
    public function delete(BookInterface $book): bool
    {
        $this->bookResource->delete($book);
        return true;
    }
}
