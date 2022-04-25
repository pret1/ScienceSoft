<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api;

use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;

interface BookRepositoryInterface
{
    /**
     * @param int $id
     * @return BookInterface
     */
    public function getById($id): BookInterface;

    /**
     * @param BookInterface $book
     * @return BookInterface
     */
    public function save(BookInterface $book): BookInterface;

    /**
     * @param BookInterface $book
     * @return bool
     */
    public function delete(BookInterface $book): bool;
}
