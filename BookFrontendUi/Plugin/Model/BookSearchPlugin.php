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

    /**
     * @param BookRepositoryInterface $subject
     * @param BookInterface $book
     * @return BookInterface
     */
    public function afterGetList(
        BookRepositoryInterface $subject,
        BookInterface $book
    ) {
        $characterAttribute = $this->characterRepository->getById(1);

        $extensionAttributes = $book->getExtensionAttributes();
        $extensionAttributes->setGenre($characterAttribute->getGenre());
        $extensionAttributes->setCharacters([$characterAttribute]);
        $book->setExtensionAttributes($extensionAttributes);
        return $book;
    }
}
