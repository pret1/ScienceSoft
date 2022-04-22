<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api;

use Magento\Framework\Exception\NoSuchEntityException;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;

interface BookRepositoryInterface
{
    /**
     * @param int $id
     * @return BookInterface
     * @throws NoSuchEntityException
     */
    public function getById($id): BookInterface;

    /**
     * @param BookInterface $book
     * @return BookInterface
     */
    public function save(BookInterface $book): BookInterface;

    /**
     * @param BookInterface $book
     * @return void
     */
    public function delete(BookInterface $book): BookInterface;
}
