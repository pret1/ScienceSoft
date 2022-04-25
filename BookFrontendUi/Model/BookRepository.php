<?php

namespace ScienceSoft\BookFrontendUi\Model;

use ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterfaceFactory;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book as BookResource;
use ScienceSoft\BookFrontendUi\NoSuchEntityException;

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

    /**
     * @param BookInterfaceFactory $bookFactory
     */
    public function __construct(
        BookInterfaceFactory $bookFactory,
        BookResource $bookResource
    ) {
        $this->bookFactory = $bookFactory;
        $this->bookResource = $bookResource;
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

    /**
     * @param BookInterface $book
     * @return BookInterface
     */
    public function save(BookInterface $book): BookInterface
    {
        $book->bookResource()->save($book);
        return $book;
    }

    /**
     * @param BookInterface $book
     * @return bool
     */
    public function delete(BookInterface $book): bool
    {
        $book->bookResource()->delete($book);
        return true;
    }
}
