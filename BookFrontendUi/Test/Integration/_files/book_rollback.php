<?php

declare(strict_types=1);

//default path magento/dev/tests/integration/testsuite/Magento/Book/_files

use ScienceSoft\BookFrontendUi\Model\Book;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection;

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
/** @var \ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection $bookCollection */
$bookCollection = $objectManager->get(Collection::class);

/** @var Book $book */
$book = $bookCollection->getLastItem();
$bookId = $book->delete();

