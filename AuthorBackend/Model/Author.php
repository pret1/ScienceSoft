<?php

namespace ScienceSoft\AuthorBackend\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use ScienceSoft\AuthorBackend\Api\Data\AuthorInterface;
use ScienceSoft\AuthorBackend\Api\Data\AuthorExtensionInterface;
use ScienceSoft\AuthorBackend\Model\ResourceModel\AuthorResourceModel;

class Author extends AbstractExtensibleModel implements AuthorInterface
{
    const NAME = 'name';
    const NAME_BOOKS = 'name_written_books';
    const DATE_BORN = 'date_born';
    const GENRE = 'genre';

    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(AuthorResourceModel::class);
    }
    public function getName(): string
    {
        return $this->_getData(self::NAME);
    }

    public function setName(string $name): self
    {
        return $this->setData(self::NAME);
    }

    public function getNameWrittenBooks(): string
    {
        return $this->_getData(self::NAME_BOOKS);
    }

    public function setNameWrittenBooks(string $nameBook): self
    {
        return $this->setData(self::NAME_BOOKS);
    }

    public function getDateBorn(): string
    {
        return $this->_getData(self::DATE_BORN);
    }

    public function setDateBorn(string $dateBorn): self
    {
        return $this->setData(self::DATE_BORN);
    }

    public function getGenre(): string
    {
        return $this->_getData(self::GENRE);
    }

    public function setGenre(string $genre): self
    {
        return $this->setData(self::GENRE);
    }

    public function getExtensionAttributes(): \ScienceSoft\AuthorBackend\Api\Data\AuthorExtensionInterface
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @param AuthorExtensionInterface $extensionAttributes
     * @return AuthorInterface
     */
    public function setExtensionAttributes(AuthorExtensionInterface $extensionAttributes): AuthorInterface
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
