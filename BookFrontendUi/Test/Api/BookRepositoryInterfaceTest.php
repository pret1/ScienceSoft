<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Test\Api;

use Magento\TestFramework\TestCase\WebapiAbstract;
use ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection;

class BookRepositoryInterfaceTest extends WebapiAbstract
{
    /**
     * @return void
     * @magentoApiDataFixture ScienceSoft_BookFrontendUi::Test/Integration/_files/book.php
     */
    public function testBookRouting()
    {
        $objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        /** @var \ScienceSoft\BookFrontendUi\Model\ResourceModel\Book\Collection $bookCollection */
        $bookCollection = $objectManager->get(Collection::class);
        $bookCollection->getSelect();
        $bookId = $bookCollection->getLastItem()->getId();
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
