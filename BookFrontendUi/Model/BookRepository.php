<?php

namespace ScienceSoft\BookFrontendUi\Model;

use ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookFactory;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post as BookResource;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\Collection;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post\CollectionFactory;
use ScienceSoft\BookFrontendUi\NoSuchEntityException;

class BookRepository implements BookRepositoryInterface
{
    private BookFactory $bookFactory;

    private CollectionFactory $collectionFactory;

    private BookResource $bookResource;

    /**
     * @param BookFactory $bookFactory
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        BookFactory $bookFactory,
        CollectionFactory $collectionFactory,
        BookResource $bookResource
    ) {
        $this->bookFactory = $bookFactory;
        $this->collectionFactory = $collectionFactory;
        $this->bookResource = $bookResource;
    }

    public function getById($id)
    {
        $book = $this->bookFactory->create();
        $book->bookResource()->load($book, $id);
        if (!$book->getId()) {
            throw new NoSuchEntityException(__('Unable to find book with ID "%1"', $id));
        }
        return $book;
    }

    public function save(BookInterface $book)
    {
        $book->bookResource()->save($book);
        return $book;
    }

    public function delete(BookInterface $book)
    {
        $book->bookResource()->delete($book);
    }
}
