<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface BookInterface extends ExtensibleDataInterface
{
    /**
     * Identifier getter
     *
     * @return int
     */
    public function getId();

    /**
     * Identifier setter
     *
     * @param mixed $value
     * @return $this
     */
    public function setId($value);

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
     * @return self
     */
    public function setGenre($genre): self;

    /**
     * @return string
     */
    public function getDateWrite(): string;

    /**
     * @param string $dateWrite
     * @return void
     */
    public function setDateWrite($dateWrite): void;

    /**
     * @return int
     */
    public function getCountPages(): int;

    /**
     * @param int $countPages
     * @return void
     */
    public function setCountPages($countPages): void;
}
