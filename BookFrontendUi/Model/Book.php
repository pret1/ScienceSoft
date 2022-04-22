<?php

namespace ScienceSoft\BookFrontendUi\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use ScienceSoft\BookFrontendUi\Api\Data\BookInterface;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post;

class Book extends AbstractExtensibleModel implements BookInterface
{
    const NAME = 'name';
    const CONTENT = 'content';
    const GENRE = 'genre';
    const DATE_WRITE = 'date_write';
    const COUNT_PAGES = 'count_pages';

    protected function _construct()
    {
        $this->_init(Post::class);
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
     * @return void
     */
    public function setGenre($genre): void
    {
        $this->setData(self::GENRE);
    }

    /**
     * @return string
     */
    public function getDate_write(): string
    {
        return $this->_getData(self::DATE_WRITE);
    }

    /**
     * @param string $date_write
     * @return void
     */
    public function setDate_write($date_write): void
    {
        $this->setData(self::DATE_WRITE);
    }

    /**
     * @return int
     */
    public function getCount_pages(): int
    {
        return $this->_getData(self::COUNT_PAGES);
    }

    /**
     * @param int $count_pages
     * @return void
     */
    public function setCount_pages($count_pages): void
    {
        $this->setData(self::COUNT_PAGES);
    }
}
