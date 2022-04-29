<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Test\Api;

use Magento\TestFramework\TestCase\WebapiAbstract;

class BookRepositoryInterfaceTest extends WebapiAbstract
{
    /**
     * @return void
     * @magentoApiDataFixture Magento/Customer/_files/customer.php
     */
    public function testBookRouting()
    {
        $regionsCollection = $this->regionsCollectionFactory->create();
        $regionsCollection->unshiftOrder('region_id', 'ASC');
        $region = $regionsCollection->getFirstItem()->getId();
        $itemId = 1000;
        $serviceInfo = [
            'rest' => [
                'resourcePath' => '/V1/book_example/' . $itemId,
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_GET,
            ],
        ];
        $requestData = ['itemId' => $itemId];
        $item = $this->_webApiCall($serviceInfo, $requestData);
        $this->assertEquals('egg', $item['name'], "Item was retrieved unsuccessfully");
    }
}
