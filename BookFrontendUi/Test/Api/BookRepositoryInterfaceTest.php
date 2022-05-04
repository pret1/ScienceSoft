<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Test\Api;

use Magento\TestFramework\TestCase\WebapiAbstract;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\CollectionFactory as BookCollectionFactory;
use Magento\Framework\Data\Collection\AbstractDb;

class BookRepositoryInterfaceTest extends WebapiAbstract
{
    private BookCollectionFactory $bookCollectionFactory;

    public function __construct(
        BookCollectionFactory $bookCollectionFactory,
        AbstractDb $abstractDb
    ) {
        $this->bookCollectionFactory = $bookCollectionFactory;
    }
    /**
     * @return void
     * @magentoApiDataFixture Magento/Customer/_files/customer.php
     */
    public function testBookRouting()
    {
        $bookCollection = $this->bookCollectionFactory->create();
        $bookCollection->unshiftOrder('region_id', 'ASC');
        $bookId = $bookCollection->getFirstItem()->getId();
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
