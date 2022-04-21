<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api;

use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;

interface BookRepositoryInterface
{
    /**
     * @param int $id
     * @return \ScienceSoft\BookFrontendUi\Api\Data\BookInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \ScienceSoft\BookFrontendUi\Api\Data\BookInterface $book
     * @return \ScienceSoft\BookFrontendUi\Api\Data\BookInterface
     */
    public function save(BookInterface $book);

    /**
     * @param \ScienceSoft\BookFrontendUi\Api\Data\BookInterface $book
     * @return void
     */
    public function delete(BookInterface $book);
}
