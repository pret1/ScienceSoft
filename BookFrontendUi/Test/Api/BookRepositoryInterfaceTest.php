<?php

declare(strict_types=1);

namespace ScienceSoft\BookFrontendUi\Test\Api;

use Magento\TestFramework\TestCase\WebapiAbstract;

class BookRepositoryInterfaceTest extends WebapiAbstract
{
    public function testBookRouting()
    {
        $itemId = 1;
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
