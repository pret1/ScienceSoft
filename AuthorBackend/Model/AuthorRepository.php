<?php

namespace ScienceSoft\AuthorBackend\Model;

use ScienceSoft\AuthorBackend\Api\AuthorRepositoryInterface;
use ScienceSoft\AuthorBackend\Api\Data\AuthorInterface;
use ScienceSoft\AuthorBackend\Api\Data\AuthorInterfaceFactory as AuthorFactory;
use ScienceSoft\AuthorBackend\Model\ResourceModel\AuthorResourceModel as AuthorResource;

class AuthorRepository implements AuthorRepositoryInterface
{
    /**
     * @var AuthorFactory
     */
    private AuthorFactory $authorFactory;

    /**
     * @var AuthorResource
     */
    private AuthorResource $authorResource;

    /**
     * @param AuthorFactory $authorFactory
     * @param AuthorResource $authorResource
     */
    public function __construct(
        AuthorFactory $authorFactory,
        AuthorResource $authorResource
    ) {
        $this->authorFactory = $authorFactory;
        $this->authorResource = $authorResource;
    }

    /**
     * @param int $id
     * @return AuthorInterface
     */
    public function getById(int $id): AuthorInterface
    {
        $author = $this->authorFactory->create();
        $this->authorResource->load($author, $id);
        return $author;
    }

    /**
     * @param AuthorInterface $author
     * @return AuthorInterface
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function save(AuthorInterface $author): AuthorInterface
    {
        $this->authorResource->save($author);
        return $author;
    }

    /**
     * @param AuthorInterface $author
     * @return bool
     * @throws \Exception
     */
    public function delete(AuthorInterface $author): bool
    {
        $this->authorResource->delete($author);
        return true;
    }
}
