<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Api;

use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;

interface CharacterRepositoryInterface
{
    /**
     * @param int $id
     * @return CharacterInterface
     */
    public function getById($id): CharacterInterface;

    /**
     * @return CharacterInterface[]
     */
    public function getList(): array;

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
