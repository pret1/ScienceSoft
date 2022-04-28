<?php
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
$book->setId(3)
    ->setName('new book')
    ->setContent('story start today')
    ->setGenre('traveling')
    ->setDateWrite('2022-10-28')
    ->setCountPages(189);

$book->isObjectNew(true);
$book->save();
//$bookRegistry->remove($customer->getId());
