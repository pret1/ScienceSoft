<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterfaceFactory as CharacterFactory;
use ScienceSoft\CharacterBook\Api\CharacterRepositoryInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterSearchResultInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterSearchResultInterfaceFactory;
use ScienceSoft\CharacterBook\Model\ResourceModel\CharacterResourceModel as CharacterResource;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use ScienceSoft\CharacterBook\Model\ResourceModel\Character\CollectionFactory;

class CharacterRepository implements CharacterRepositoryInterface
{
    /**
     * @var CharacterFactory
     */
    private CharacterFactory $characterFactory;

    /**
     * @var CharacterResource
     */
    private CharacterResource $characterResource;

    /**
     * @var CharacterSearchResultInterfaceFactory
     */
    private CharacterSearchResultInterfaceFactory $characterSearchResultInterfaceFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private CollectionProcessorInterface $collectionProcessor;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    public function __construct(
        CharacterFactory  $characterFactory,
        CharacterResource $characterResource,
        CharacterSearchResultInterfaceFactory $characterSearchResultInterfaceFactory,
        CollectionProcessorInterface $collectionProcessor,
        CollectionFactory $collectionFactory
    ) {

        $this->characterFactory = $characterFactory;
        $this->characterResource = $characterResource;
        $this->characterSearchResultInterfaceFactory = $characterSearchResultInterfaceFactory;
        $this->collectionProcessor = $collectionProcessor;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @param $id
     * @return CharacterInterface
     */
    public function getById($id): CharacterInterface
    {
        $character = $this->characterFactory->create();
        $this->characterResource->load($character, $id);
        return $character;
    }

    /**
     * @param CharacterInterface $character
     * @return CharacterInterface
     */
    public function save(CharacterInterface $character): CharacterInterface
    {
        $this->characterResource->save($character);
        return $character;
    }

    /**
     * @param CharacterInterface $character
     * @return bool
     */
    public function delete(CharacterInterface $character): bool
    {
        $this->characterResource->delete($character);
        return true;
    }

    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);
        $searchResults = $this->characterSearchResultInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }
}
