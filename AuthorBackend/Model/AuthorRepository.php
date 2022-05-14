<?php

namespace ScienceSoft\AuthorBackend\Model;

use ScienceSoft\AuthorBackend\Api\AuthorRepositoryInterface;
use ScienceSoft\AuthorBackend\Api\Data\AuthorInterface;
use ScienceSoft\AuthorBackend\Api\Data\AuthorInterfaceFactory as AuthorFactory;
use ScienceSoft\AuthorBackend\Model\ResourceModel\AuthorResourceModel as AuthorResource;

class AuthorRepository implements AuthorRepositoryInterface
{
    private AuthorFactory $authorFactory;

    private AuthorResource $authorResource;

    public function __construct(
        AuthorFactory $authorFactory,
        AuthorResource $authorResource
    ) {
        $this->authorFactory = $authorFactory;
        $this->authorResource = $authorResource;
    }

    public function getById(int $id): AuthorInterface
    {
        $author = $this->authorFactory->create();
        $this->authorResource->load($author, $id);
        return $author;
    }

    public function save(AuthorInterface $author): AuthorInterface
    {
        $this->authorResource->save($author);
        return $author;
    }

    public function delete(AuthorInterface $author): bool
    {
        $this->authorResource->delete($author);
        return true;
    }
}
