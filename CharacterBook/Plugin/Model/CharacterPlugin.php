<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Plugin\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
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

    public function afterGet(
        ProductRepositoryInterface $subject,
        ProductInterface $product
    ) {
        $characterAttribute = $this->characterRepository->getById(1);

        $extensionAttributes = $product->getExtensionAttributes();
        $extensionAttributes->setNameBook($characterAttribute->getNameBook());
        $extensionAttributes->setAuthor($characterAttribute->getAuthor());
        $extensionAttributes->setGenre($characterAttribute->getGenre());

        $extensionAttributes->setCharacters([$characterAttribute]);
        $extensionAttributes->setCharacterOne($characterAttribute);
        $product->setExtensionAttributes($extensionAttributes);
        return $product;
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
