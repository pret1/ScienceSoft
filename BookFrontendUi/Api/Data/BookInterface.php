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
    public function setId($id);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name): self;

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content): self;

    /**
     * @return string
     */
    public function getGenre(): string;

    /**
     * @param string $genre
     * @return $this
     */
    public function setGenre($genre): self;

    /**
     * @return string
     */
    public function getDateWrite(): string;

    /**
     * @param string $dateWrite
     * @return $this
     */
    public function setDateWrite($dateWrite): self;

    /**
     * @return int
     */
    public function getCountPages(): int;

    /**
     * @param int $countPages
     * @return $this
     */
    public function setCountPages($countPages): self;
}
