<?php

//default path magento/dev/tests/integration/testsuite/Magento/Book/_files

use Magento\Framework\App\ResourceConnection;
use ScienceSoft\BookFrontendUi\Model\Book;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection;

//$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
//$bookCollection = $objectManager->create(ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\CollectionFactory::class);
///** @var \ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection $bookCollection */
//$bookCollection = $objectManager->get(ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection::class);

///** @var \Magento\Framework\Registry $registry */
//$registry = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->get(\Magento\Framework\Registry::class);
//$registry->unregister('isSecureArea');
//$registry->register('isSecureArea', true);

//$book = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(
//    \ScienceSoft\BookFrontendUi\Model\Book::class
//);

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
/** @var \ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection $bookCollection */
$bookCollection = $objectManager->get(Collection::class);

/** @var Book $book */
$book = $bookCollection->getLastItem();
$bookId = $book->delete();


//$table = 'book';
//$where = 'ID=(SELECT MAX(id) FROM book)';
///** @var \Magento\Framework\App\ResourceConnection $resourceConnection */
//$connection = $resourceConnection->getConnection();
//$delete = $connection->delete($table, $where);


//$bookCollection->unshiftOrder('id', 'ASC');
//$book = $bookCollection->getSelectSql(1)->delete();
//$book = clone $bookCollection->getSelect();
//$book = $bookCollection->getSelect();
//$deleteBook = $bookCollection->getLastItem();
//$book->reset(Zend_Db_Select::COLUMNS);
//$book->columns($this->getResource()->getIdFieldName(), 'main_table');
//$book->load('egg');
//if ($book->getId())
//    $book->delete();
//}

//$registry->unregister('isSecureArea');
//$registry->register('isSecureArea', false);
