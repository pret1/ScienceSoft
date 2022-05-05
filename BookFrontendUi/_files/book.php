<?php
//default path magento/dev/tests/integration/testsuite/Magento/Book/_files

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
use Magento\Customer\Model\CustomerRegistry;

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
/** @var $repository \ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface */
$repository = $objectManager->create(\ScienceSoft\BookFrontendUi\Api\BookRepositoryInterface::class);
$book = $objectManager->create(\ScienceSoft\BookFrontendUi\Model\Book::class);
///** @var CustomerRegistry $bookRegistry */
//$customerRegistry = $objectManager->get(CustomerRegistry::class);
/** @var \ScienceSoft\BookFrontendUi\Model\Book $book */
$book->setName('egg')
    ->setContent('sely')
    ->setGenre('comedi')
    ->setDateWrite('2022-04-20')
    ->setCountPages('18');

//$oneBook = $repository->getById(1000);
//$book->isObjectNew(true);
$book->save();
$a=1;
//$bookRegistry->remove($customer->getId());
