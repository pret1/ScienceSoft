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
     * @return $this
     */
    public function setName($name): self
    {
        $this->setData(self::NAME);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->_getData(self::CONTENT);
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content): self
    {
       return $this->setData(self::CONTENT);
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
     * @return $this
     */
    public function setDateWrite($dateWrite): self
    {
       return $this->setData(self::DATE_WRITE);
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
     * @return $this
     */
    public function setCountPages($countPages): self
    {
       return $this->setData(self::COUNT_PAGES);
    }
}
