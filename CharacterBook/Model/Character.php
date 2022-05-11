<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model;

use Magento\Catalog\Model\Product;
use Magento\Framework\Api\AttributeValueFactory;
use Magento\Framework\Api\ExtensionAttributesFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Framework\Model\Context;
use ScienceSoft\CharacterBook\Api\Data\CharacterInterface;
use ScienceSoft\CharacterBook\Model\ResourceModel\CharacterResourceModel;

class Character extends AbstractExtensibleModel implements CharacterInterface
{
    const NAME = 'name';
    const NAME_BOOK = 'name_book';
    const AUTHOR = 'author';
    const GENRE = 'genre';

    /**
     * @var EventManager
     */
    private EventManager $eventManager;

    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(CharacterResourceModel::class);
    }

    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        ExtensionAttributesFactory $extensionFactory,
        AttributeValueFactory $customAttributeFactory,
        EventManager $eventManager,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $registry,
            $extensionFactory,
            $customAttributeFactory,
            $resource,
            $resourceCollection,
            $data
        );
        $this->eventManager = $eventManager;
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
        $this->eventManager->dispatch('event_write_log');
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

    /**
     * @inheritdoc
     *
     * @return \Magento\Framework\Api\ExtensionAttributesInterface
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inheritdoc
     *
     * @param \Magento\Catalog\Api\Data\ProductExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\ProductExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
