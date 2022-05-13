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

    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
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
    public function setName(string $name): self
    {
        return $this->setData(self::NAME, $name);
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
    public function setContent(string $content): self
    {
        return $this->setData(self::CONTENT, $content);
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
        return $this->setData(self::GENRE, $genre);
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
    public function setDateWrite(string $dateWrite): self
    {
        return $this->setData(self::DATE_WRITE, $dateWrite);
    }

    /**
     * @return string
     */
    public function getCountPages(): string
    {
        return $this->_getData(self::COUNT_PAGES);
    }

    /**
     * @param string $countPages
     * @return $this
     */
    public function setCountPages(string $countPages): self
    {
        return $this->setData(self::COUNT_PAGES, $countPages);
    }

    /**
     * @return \ScienceSoft\BookFrontendUi\Api\Data\BookExtensionInterface
     */
    public function getExtensionAttributes(): \ScienceSoft\BookFrontendUi\Api\Data\BookExtensionInterface
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @param \ScienceSoft\BookFrontendUi\Api\Data\BookExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \ScienceSoft\BookFrontendUi\Api\Data\BookExtensionInterface $extensionAttributes
    ): self {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
