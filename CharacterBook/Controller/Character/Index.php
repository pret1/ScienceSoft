<?php

namespace ScienceSoft\CharacterBook\Controller\Character;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function execute()
    {
        echo 'Hello new modal';
    }
}
