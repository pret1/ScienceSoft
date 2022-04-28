<?php

namespace ScienceSoft\CharacterBook\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use ScienceSoft\CharacterBook\Api\CharacterRepositoryInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Model\ResourceModel\Character\Collection;
use ScienceSoft\CharacterBook\Model\ResourceModel\Character\CollectionFactory;

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

    public function __construct(
        CharacterRepositoryInterface $characterRepository,
        RequestInterface $request,
        CollectionFactory $collectionFactory
    ) {

        $this->characterRepository = $characterRepository;
        $this->request = $request;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return CharacterInterface
     */
    public function getCharacterList()
    {
        return $this->characterRepository->getList();
    }

    /**
     */
    public function getCharacterTable()
    {
        return $this->characterRepository->getTable();
    }

    /**
     * @return Collection
     */
    public function getCharacterCollection(): Collection
    {
        return $this->collectionFactory->create();
    }
}
