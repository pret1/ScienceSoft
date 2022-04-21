<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface BookInterface extends ExtensibleDataInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getContent();

    public function setContent($content);

    public function getGenre();

    public function setGenre($genre);

    public function getDate_write();

    public function setDate_write($date_write);

    public function getCount_pages();

    public function setCount_pages($count_pages);
}
