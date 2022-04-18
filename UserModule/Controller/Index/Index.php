<?php

declare(strict_types=1);

namespace ScienceSoft\UserModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        echo 'User here';
    }
}
