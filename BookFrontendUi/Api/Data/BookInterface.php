<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface BookInterface extends ExtensibleDataInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return void
     */
    public function setId($id): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return void
     */
    public function setName($name): void;

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     * @return void
     */
    public function setContent($content): void;

    /**
     * @return string
     */
    public function getGenre(): string;

    /**
     * @param string $genre
     * @return void
     */
    public function setGenre($genre): void;

    /**
     * @return string
     */
    public function getDate_write(): string;

    /**
     * @param string $date_write
     * @return void
     */
    public function setDate_write($date_write): void;

    /**
     * @return int
     */
    public function getCount_pages(): int;

    /**
     * @param int $count_pages
     * @return void
     */
    public function setCount_pages($count_pages): void;
}
