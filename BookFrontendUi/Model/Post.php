<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Post as PostResource;

class Post extends AbstractModel implements IdentityInterface
{
    /**
     * @var string
     */
    const CACHE_TAG = 'book';

    /**
     * @return string[]
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return void
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct(): void
    {
        $this->_init(PostResource::class);
    }
}
