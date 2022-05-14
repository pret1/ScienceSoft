<?php

declare(strict_types=1);

namespace ScienceSoft\AuthorBackend\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface AuthorInterface extends ExtensibleDataInterface
{
    /**
     * Identifier getter
     *
     * @return int
     */
    public function getId();

    /**
     * Identifier setter
     *
     * @param mixed $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self;

    /**
     * @return string
     */
    public function getNameWrittenBooks(): string;

    /**
     * @param string $nameBook
     * @return $this
     */
    public function setNameWrittenBooks(string $nameBook): self;

    /**
     * @return string
     */
    public function getDateBorn(): string;

    /**
     * @param string $dateBorn
     * @return $this
     */
    public function setDateBorn(string $dateBorn): self;

    /**
     * @return string
     */
    public function getGenre(): string;

    /**
     * @param string $genre
     * @return $this
     */
    public function setGenre(string $genre): self;

    /**
     * @return \ScienceSoft\AuthorBackend\Api\Data\AuthorExtensionInterface
     */
    public function getExtensionAttributes(): \ScienceSoft\AuthorBackend\Api\Data\AuthorExtensionInterface;

    /**
     * @param \ScienceSoft\AuthorBackend\Api\Data\AuthorExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \ScienceSoft\AuthorBackend\Api\Data\AuthorExtensionInterface $extensionAttributes
    ): self;
}
