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

    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    public function setName($name)
    {
        $this->setData(self::NAME);
    }

    public function getContent()
    {
        return $this->_getData(self::NAME);
    }

    public function setContent($content)
    {
        $this->setData(self::NAME);
    }

    public function getGenre()
    {
        return $this->_getData(self::GENRE);
    }

    public function setGenre($genre)
    {
        $this->setData(self::GENRE);
    }

    public function getDate_write()
    {
        return $this->_getData(self::DATE_WRITE);
    }

    public function setDate_write($date_write)
    {
        $this->setData(self::DATE_WRITE);
    }

    public function getCount_pages()
    {
        return $this->_getData(self::COUNT_PAGES);
    }

    public function setCount_pages($count_pages)
    {
        $this->setData(self::COUNT_PAGES);
    }
}
