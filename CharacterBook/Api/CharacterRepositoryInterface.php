<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterSearchResultInterface;

interface CharacterRepositoryInterface
{
    /**
     * @param int $id
     * @return CharacterInterface
     */
    public function getById($id): CharacterInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \ScienceSoft\CharacterBook\Api\Data\CharacterSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param CharacterInterface $character
     * @return CharacterInterface
     */
    public function save(CharacterInterface $character): CharacterInterface;

    /**
     * @param CharacterInterface $character
     * @return bool
     */
    public function delete(CharacterInterface $character): bool;
}
