<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Api\Data;

use Magento\Catalog\Model\Product;
use Magento\Framework\Api\ExtensibleDataInterface;

interface CharacterInterface extends ExtensibleDataInterface
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
    public function getNameBook(): string;

    /**
     * @param string $nameBook
     * @return $this
     */
    public function setNameBook(string $nameBook): self;

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
     * @return string
     */
    public function getAuthor(): string;

    /**
     * @param string $author
     * @return $this
     */
    public function setAuthor(string $author): self;

    /**
     * @inheritdoc
     *
     * @return \Magento\Framework\Api\ExtensionAttributesInterface
     */
    public function getExtensionAttributes();

    /**
     * @inheritdoc
     *
     * @param \Magento\Catalog\Api\Data\ProductExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\ProductExtensionInterface $extensionAttributes);

}
