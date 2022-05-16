<?php

declare(strict_types=1);

namespace ScienceSoft\AuthorBackend\Plugin\Api;

use ScienceSoft\AuthorBackend\Api\AuthorRepositoryInterface;
use ScienceSoft\AuthorBackend\Api\Data\AuthorInterface;
use ScienceSoft\BookFrontendUi\Model\BookRepository;

class AuthorPlugin
{
    /** @var BookRepository */
    private BookRepository $bookRepository;

    /**
     * @param BookRepository $bookRepository
     */
    public function __construct(
        BookRepository $bookRepository
    ) {
        $this->bookRepository = $bookRepository;
    }

    /**
     * @param AuthorRepositoryInterface $subject
     * @param AuthorInterface $author
     * @return AuthorInterface
     * @throws \ScienceSoft\BookFrontendUi\NoSuchEntityException
     */
    public function afterGetById(
        AuthorRepositoryInterface $subject,
        AuthorInterface $author
    ) {
        $bookAttribute = $this->bookRepository->getById(1013);

        $extensionAttributes = $author->getExtensionAttributes();
        $extensionAttributes->setDateWrite($bookAttribute->getDateWrite());
        $extensionAttributes->setBooks([$bookAttribute]);
        $author->setExtensionAttributes($extensionAttributes);
        return $author;
    }
}
