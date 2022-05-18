<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Model;

use Magento\Framework\Api\SearchResults;
use ScienceSoft\BookFrontendUi\Api\Data\BookSearchResultInterface;

class BookSearchResult extends SearchResults implements BookSearchResultInterface
{
}
