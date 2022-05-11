<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Plugin\Model;

use ScienceSoft\CharacterBook\Model\Character;
use ScienceSoft\CharacterBook\Api\CharacterRepositoryInterface;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Model\CharacterRepository;

class CharacterPlugin
{
    private CharacterRepository $characterRepository;

    public function __construct(
      CharacterRepository $characterRepository
    ) {
        $this->characterRepository = $characterRepository;
    }

    public function afterGetName(
        CharacterRepositoryInterface $subject,
        CharacterInterface $character
    ) {
        $character = $this->characterRepository->getById(1);

        $extensionAttributes = $character->getExtensionAttributes();
        $extensionAttributes->setImage($character->getAuthor());

        return $character->setExtensionAttributes($extensionAttributes);
    }

//    /**
//     * @param Character $subject
//     * @param $result
//     * @return string
//     */
//    public function afterGetName(Character $subject, $result): string
//    {
//        return $result . " some text";
//    }
}
