<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Test\Api;

use Magento\TestFramework\TestCase\WebapiAbstract;
use ScienceSoft\BookFrontendUi\Model\Book;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection;
use Magento\Framework\App\ResourceConnection;
//use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\CollectionFactory as BookCollectionFactory;
//use Magento\Framework\Data\Collection\AbstractDb;

class BookRepositoryInterfaceTest extends WebapiAbstract
{
    /**
     * @return void
     * @magentoApiDataFixture Magento/Book/_files/book.php
     */
    public function testBookRouting()
    {
//        $filterDate = "egg";
//        /** @var Collection $gridCollection */
//        $gridCollection = Bootstrap::getObjectManager()
//            ->get(Collection::class);
//        $collection = $gridCollection->addFieldToFilter('created_at', ['qteq' => $filterDate]);
//        $expectedSelect = "WHERE (((`main_table`.`name` = '{$filterDate}')))";
//        $this->assertStringContainsString($expectedSelect, $collection->getSelectSql(true));
        $objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        /** @var \ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection $bookCollection */
        $bookCollection = $objectManager->get(Collection::class);

//        $filterDate = 'egg';
//        $bookCollection = $this->bookCollectionFactory->create();
//        $bookCollection->getSelectSql('region_id', 'ASC');
        $bookCollection->getSelect();
//        $bookName = $bookCollection->addFieldToFilter('name', ['qteq' => $filterDate]);
//        $expectedSelect = "WHERE (((`main_table`.`name` = '{$filterDate}')))";
//        $this->assertStringContainsString($expectedSelect, $bookName->getSelectSql(true));
        $bookId = $bookCollection->getLastItem()->getId();
//        /** @var Book $book */
//        $book = $bookCollection->getLastItem();
//        $bookId = $book->delete();
        $serviceInfo = [
            'rest' => [
                'resourcePath' => '/V1/book_example/' . $bookId,
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET,
            ],
        ];
        $requestData = ['itemId' => $bookId];
        $item = $this->_webApiCall($serviceInfo, $requestData);
        $this->assertEquals('egg', $item['name'], "Item was retrieved unsuccessfully");
    }
}
