<?php

declare(strict_types=1);

//default path magento/dev/tests/integration/testsuite/Magento/Book/_files

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
$book = $objectManager->create(\ScienceSoft\BookFrontendUi\Model\Book::class);
/** @var \ScienceSoft\BookFrontendUi\Model\Book $book */
$book->setName('egg')
    ->setContent('sely')
    ->setGenre('comedi')
    ->setDateWrite('2022-04-20')
    ->setCountPages('18');

$book->save();
