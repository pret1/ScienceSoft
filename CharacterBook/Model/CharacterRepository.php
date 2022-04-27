<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model;

use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterfaceFactory as CharacterFactory;
use ScienceSoft\CharacterBook\Api\CharacterRepositoryInterface;
use ScienceSoft\CharacterBook\Model\ResourceModel\CharacterResourceModel as CharacterResource;

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

    public function __construct(
        CharacterFactory  $characterFactory,
        CharacterResource $characterResource
    ) {

        $this->characterFactory = $characterFactory;
        $this->characterResource = $characterResource;
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
     * @return CharacterInterface[]
     */
    public function getList(): array
    {
        $character = $this->characterFactory->create();
        $this->characterResource->getTable($character);
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
}
