<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api;

use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface BookRepositoryInterface
{
    /**
     * @param int $id
     * @return \ScienceSoft\BookFrontendUi\Api\Data\BookInterface
     */
    public function getById(int $id): BookInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \ScienceSoft\BookFrontendUi\Api\Data\BookSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param \ScienceSoft\BookFrontendUi\Api\Data\BookInterface $book
     * @return \ScienceSoft\BookFrontendUi\Api\Data\BookInterface
     */
    public function save(BookInterface $book): BookInterface;

    /**
     * @param \ScienceSoft\BookFrontendUi\Api\Data\BookInterface $book
     * @return bool
     */
    public function delete(BookInterface $book): bool;
}
