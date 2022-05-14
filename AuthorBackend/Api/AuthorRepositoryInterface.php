<?php

declare(strict_types=1);

namespace ScienceSoft\AuthorBackend\Api;

use ScienceSoft\AuthorBackend\Api\Data\AuthorInterface;

interface AuthorRepositoryInterface
{
    /**
     * @param int $id
     * @return AuthorInterface
     */
    public function getById(int $id): AuthorInterface;

    /**
     * @param AuthorInterface $author
     * @return AuthorInterface
     */
    public function save(AuthorInterface $author): AuthorInterface;

    /**
     * @param AuthorInterface $author
     * @return bool
     */
    public function delete(AuthorInterface $author): bool;
}
