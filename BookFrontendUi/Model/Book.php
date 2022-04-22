<?php

namespace ScienceSoft\BookFrontendUi\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book as BookResource;

class Book extends AbstractExtensibleModel implements BookInterface
{
    const NAME = 'name';
    const CONTENT = 'content';
    const GENRE = 'genre';
    const DATE_WRITE = 'date_write';
    const COUNT_PAGES = 'count_pages';

    protected function _construct()
    {
        $this->_init(BookResource::class);
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
     * @return void
     */
    public function setName($name): void
    {
        $this->setData(self::NAME);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->_getData(self::NAME);
    }

    /**
     * @param string $content
     * @return void
     */
    public function setContent($content): void
    {
        $this->setData(self::NAME);
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
     * @return self
     */
    public function setGenre($genre): self
    {
       return $this->setData(self::GENRE);
    }

    /**
     * @return string
     */
    public function getDateWrite(): string
    {
        return $this->_getData(self::DATE_WRITE);
    }

    /**
     * @param string $dateWrite
     * @return void
     */
    public function setDateWrite($dateWrite): void
    {
        $this->setData(self::DATE_WRITE);
    }

    /**
     * @return int
     */
    public function getCountPages(): int
    {
        return $this->_getData(self::COUNT_PAGES);
    }

    /**
     * @param int $countPages
     * @return void
     */
    public function setCountPages($countPages): void
    {
        $this->setData(self::COUNT_PAGES);
    }
}
