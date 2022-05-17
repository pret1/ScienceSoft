<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Model;

use Magento\Framework\Api\SearchResults;
use ScienceSoft\CharacterBook\Api\Data\CharacterSearchResultInterface;

class CharacterSearchResult extends SearchResults implements CharacterSearchResultInterface
{
}
