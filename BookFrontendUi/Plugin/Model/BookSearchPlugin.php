<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Plugin\Model;

use ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\CharacterBook\Model\CharacterRepository;

class BookSearchPlugin
{
    private CharacterRepository $characterRepository;

    public function __construct(
        CharacterRepository $characterRepository
    ) {
        $this->characterRepository = $characterRepository;
    }


    public function afterGetList(
        BookRepositoryInterface $subject,
        \ScienceSoft\BookFrontendUi\Api\Data\BookSearchResultInterface $bookSearchResult
    ) {
        $characterAttribute = $this->characterRepository->getById(1);

        $extensionAttributes = $bookSearchResult->getExtensionAttributes();
        $extensionAttributes->setGenre($characterAttribute->getGenre());
        $extensionAttributes->setCharacters([$characterAttribute]);
        $bookSearchResult->setExtensionAttributes($extensionAttributes);
        return $bookSearchResult;
    }
}
