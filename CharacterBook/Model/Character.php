<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Model\ResourceModel\CharacterResourceModel;

class Character extends AbstractExtensibleModel implements CharacterInterface
{
    const NAME = 'name';
    const NAME_BOOK = 'name_book';
    const AUTHOR = 'author';
    const GENRE = 'genre';

    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(CharacterResourceModel::class);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_getData(self::NAME);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        return $this->setData(self::NAME);
    }

    /**
     * @return string
     */
    public function getNameBook(): string
    {
        return $this->_getData(self::NAME_BOOK);
    }

    /**
     * @param string $nameBook
     * @return $this
     */
    public function setNameBook(string $nameBook): self
    {
        return $this->setData(self::NAME_BOOK);
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->_getData(self::GENRE);
    }

    /**
     * @param string $genre
     * @return $this
     */
    public function setGenre(string $genre): self
    {
        return $this->setData(self::GENRE);
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->_getData(self::AUTHOR);
    }

    /**
     * @param string $author
     * @return $this
     */
    public function setAuthor(string $author): self
    {
        return $this->setData(self::AUTHOR);
    }
}