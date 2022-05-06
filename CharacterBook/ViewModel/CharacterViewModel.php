<?php

namespace ScienceSoft\CharacterBook\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use ScienceSoft\CharacterBook\Api\CharacterRepositoryInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Model\ResourceModel\Character\Collection;
use ScienceSoft\CharacterBook\Model\ResourceModel\Character\CollectionFactory;
use Magento\Framework\App\ResourceConnection;

class CharacterViewModel implements ArgumentInterface
{
    /**
     * @var CharacterRepositoryInterface
     */
    private CharacterRepositoryInterface $characterRepository;

    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    private ResourceConnection $resourceConnection;

    /**
     * @param CharacterRepositoryInterface $characterRepository
     * @param RequestInterface $request
     * @param CollectionFactory $collectionFactory
     * @param ResourceConnection $resourceConnection
     */
    public function __construct(
        CharacterRepositoryInterface $characterRepository,
        RequestInterface $request,
        CollectionFactory $collectionFactory,
        ResourceConnection $resourceConnection
    ) {

        $this->characterRepository = $characterRepository;
        $this->request = $request;
        $this->collectionFactory = $collectionFactory;
        $this->resourceConnection = $resourceConnection;
    }

    /**
     * @return CharacterInterface
     */
    public function getCharacterList()
    {
        return $this->characterRepository->getList();
    }

    /**
     * @return array
     * in window Debug field watches useful command $select->assemble()
     */
    public function getSqlUseResourceConnection(): array
    {
        $connection = $this->resourceConnection->getConnection();
        $select = $connection->select()->from(['bc' => 'book_character'])
        ->joinInner(['c' => 'character'], 'bc.character_id = c.character_id')
        ->where('c.name != "Dwarf"')
        ->where('c.character_id = 1')
        ->order('c.name ASC');
        return $connection->fetchAll($select);
    }

    /**
     * @return array|null
     * in window Debug field watches useful command $collection->getSelectSql(1)
     * or $collection->getSelect()->assemble()
     */
    public function getSqlUseCollectionFactory(): array
    {
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('name', ['eq' => 'Romeo']);
        return $collection->getData();
    }

    /**
     * @return Collection
     */
    public function getCharacterCollection(): Collection
    {
        return $this->collectionFactory->create();
    }
}
